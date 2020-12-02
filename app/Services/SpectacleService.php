<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Spectacles\StoreSpectacleRequest;
use App\Http\Requests\Spectacles\UpdateSpectacleRequest;
use App\Models\Spectacle;
use App\Repositories\SpectacleRepository;
use Yajra\DataTables\Facades\DataTables;
use Mockery\Exception;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SpectacleService
{
    /**
     * @var SpectacleRepository
     */
    private SpectacleRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param SpectacleRepository $repository
     */
    public function __construct(SpectacleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getDatatablesData()
    {
        $collection = $this->repository->getCollectionToIndex();

        return Datatables::of($collection)
            ->addColumn('placeholder', '&nbsp;')
            ->editColumn('id', fn ($row) => $row->id)
            ->editColumn('name', fn ($row) => columnTrans($row, 'name'))
            ->editColumn('author', fn ($row) => columnTrans($row, 'author'))
            ->editColumn('producer', fn ($row) => columnTrans($row, 'producer'))
            ->editColumn('slug', fn ($row) => $row->slug)
            ->editColumn('min_age', fn ($row) => $row->min_age)
            ->editColumn('duration', fn ($row) => $row->duration)
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('start_at', fn ($row) => $row->start_at)
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'spectacles'))
            ->rawColumns(['actions', 'placeholder', 'active'])
            ->make(true);
    }

    /**
     * @param StoreSpectacleRequest $request
     *
     * @return Spectacle
     */
    public function createSpectacle(StoreSpectacleRequest $request) : Spectacle
    {
        $inputData = $request->validated();
        $spectacle = $this->repository->saveSpectacle($inputData);

        $this->handleStoreUploadedImages($inputData, $spectacle);
        $this->handleRelationships($spectacle, $request);

        return $spectacle;
    }

    /**
     * @param UpdateSpectacleRequest $request
     * @param Spectacle              $spectacle
     *
     * @return Spectacle
     */
    public function updateDictionary(UpdateSpectacleRequest $request, Spectacle $spectacle) : Spectacle
    {
        $this->handleUpdateUploadedImages($request->validated(), $spectacle);
        $this->handleRelationships($spectacle, $request);

        return $this->repository->updateData($request->validated(), $spectacle);
    }

    /**
     * @param Spectacle $spectacle
     * @param StoreSpectacleRequest|UpdateSpectacleRequest $request
     */
    private function handleRelationships(Spectacle $spectacle, $request) : void
    {
        $spectacle->tags()->sync($request->tag_ids);
        $spectacle->categories()->sync($request->category_ids);
    }

    /**
     * @param array     $inputData
     * @param Spectacle $spectacle
     */
    private function handleStoreUploadedImages(array $inputData, Spectacle $spectacle) : void
    {
        $fields = ['image_grid', 'image_detail', 'image_gallery'];

        collect($fields)->each(function ($field) use ($spectacle, $inputData) {
            $value = $inputData[$field];
            if (! $value) return;

            if (is_array($value)) {
                foreach ($value as $val) {
                    $this->attachMedia($spectacle, $field, $val);
                }
                return;
            }

            $this->attachMedia($spectacle, $field, $value);
        });
    }

    /**
     * @param array     $inputData
     * @param Spectacle $spectacle
     */
    private function handleUpdateUploadedImages(array $inputData, Spectacle $spectacle) : void
    {
        if (! $inputData['image_grid']) {
            if ($spectacle->image_grid !== $inputData['image_grid']) {
                $this->attachMedia($spectacle, 'image_grid', $inputData['image_grid']);
            }

        } else {
            $this->detachMedia($spectacle, 'image_grid');
        }
    }

    /**
     * @param Spectacle $spectacle
     * @param string    $field
     * @param string    $name
     */
    private function attachMedia(Spectacle $spectacle, string $field, string $name) : void
    {
        try {
            $spectacle
                ->addMedia(storage_path('tmp/uploads/' . $name))
                ->toMediaCollection($field);

        } catch (Exception $e) {}
    }

    /**
     * @param Spectacle $spectacle
     * @param string    $field
     */
    private function detachMedia(Spectacle $spectacle, string $field) : void
    {
        try {
            $spectacle
                ->getMedia($field)
                ->each(function (Media $media) {
                    $media->delete();
                });

        } catch (Exception $e) {}
    }
}
