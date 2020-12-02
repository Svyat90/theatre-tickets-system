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
        $this->handleUploadedImages($inputData, $spectacle);

        return $spectacle;
    }

    /**
     * @param UpdateSpectacleRequest $request
     * @param Spectacle              $category
     *
     * @return Spectacle
     */
    public function updateDictionary(UpdateSpectacleRequest $request, Spectacle $category) : Spectacle
    {
        return $this->repository->updateData($request->validated(), $category);
    }

    /**
     * @param array     $inputData
     * @param Spectacle $spectacle
     */
    private function handleUploadedImages(array $inputData, Spectacle $spectacle) : void
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
     * @param Spectacle $spectacle
     * @param string    $field
     * @param string    $name
     *
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    private function attachMedia(Spectacle $spectacle, string $field, string $name) : void
    {
        try {
            $spectacle
                ->addMedia(storage_path('tmp/uploads/' . $name))
                ->toMediaCollection($field);

        } catch (Exception $e) {}
    }

}
