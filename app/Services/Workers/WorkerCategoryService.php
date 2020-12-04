<?php

namespace App\Services\Workers;

use Yajra\DataTables\Facades\DataTables;
use App\Helpers\LabelHelper;
use App\Helpers\DatatablesHelper;
use App\Models\Workers\WorkerCategory;
use App\Http\Requests\Workers\WorkerCategories\StoreWorkerCategoryRequest;
use App\Http\Requests\Workers\WorkerCategories\UpdateWorkerCategoryRequest;
use App\Repositories\Workers\WorkerCategoryRepository;

class WorkerCategoryService
{
    /**
     * @var WorkerCategoryRepository
     */
    public WorkerCategoryRepository $repository;

    /**
     * WorkerCategoryService constructor.
     *
     * @param WorkerCategoryRepository $repository
     */
    public function __construct(WorkerCategoryRepository $repository)
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
            ->editColumn('slug', fn ($row) => $row->slug)
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'worker_categories'))
            ->rawColumns(['actions', 'placeholder', 'active'])
            ->make(true);
    }

    /**
     * @param StoreWorkerCategoryRequest $request
     *
     * @return WorkerCategory
     */
    public function createWorkerCategory(StoreWorkerCategoryRequest $request) : WorkerCategory
    {
        return $this->repository->saveWorkerCategory($request->validated());
    }

    /**
     * @param UpdateWorkerCategoryRequest $request
     * @param WorkerCategory              $category
     *
     * @return WorkerCategory
     */
    public function updateWorkerCategory(UpdateWorkerCategoryRequest $request, WorkerCategory $category) : WorkerCategory
    {
        return $this->repository->updateData($request->validated(), $category);
    }

}
