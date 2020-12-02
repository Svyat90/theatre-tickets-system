<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Yajra\DataTables\Facades\DataTables;

class CategoryService
{
    /**
     * @var CategoryRepository
     */
    private CategoryRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param CategoryRepository $repository
     */
    public function __construct(CategoryRepository $repository)
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
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'categories'))
            ->rawColumns(['actions', 'placeholder', 'active'])
            ->make(true);
    }

    /**
     * @param StoreCategoryRequest $request
     *
     * @return Category
     */
    public function createCategory(StoreCategoryRequest $request) : Category
    {
        return $this->repository->saveCategory($request->validated());
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param Category              $category
     *
     * @return Category
     */
    public function updateDictionary(UpdateCategoryRequest $request, Category $category) : Category
    {
        return $this->repository->updateData($request->validated(), $category);
    }

}
