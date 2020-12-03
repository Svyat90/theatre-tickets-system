<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Spectacles\StoreSpectacleRequest;
use App\Http\Requests\Spectacles\UpdateSpectacleRequest;
use App\Models\Spectacle;
use App\Repositories\SpectacleRepository;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\MediaHelper;
use App\Helpers\ImageHelper;

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
            ->addColumn('image', fn ($row) => ImageHelper::thumbImage($row->image_grid))
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'spectacles'))
            ->rawColumns(['actions', 'placeholder', 'active', 'image'])
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

        $this->handleMediaFiles($request, $spectacle);
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
        $this->handleMediaFiles($request, $spectacle);
        $this->handleRelationships($spectacle, $request);

        return $this->repository->updateData($request->validated(), $spectacle);
    }

    /**
     * @param StoreSpectacleRequest|UpdateSpectacleRequest   $request
     * @param Spectacle $spectacle
     */
    private function handleMediaFiles($request, Spectacle $spectacle) : void
    {
        MediaHelper::handleMedia($spectacle, 'image_grid', $request->image_grid);
        MediaHelper::handleMedia($spectacle, 'image_detail', $request->image_detail);
        MediaHelper::handleMediaCollect($spectacle, 'image_gallery', $request->image_gallery);
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

}
