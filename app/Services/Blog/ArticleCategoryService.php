<?php

namespace App\Services\Blog;

use Yajra\DataTables\Facades\DataTables;
use App\Helpers\LabelHelper;
use App\Helpers\DatatablesHelper;
use App\Models\Blog\ArticleCategory;
use App\Http\Requests\Blog\ArticleCategories\StoreArticleCategoryRequest;
use App\Http\Requests\Blog\ArticleCategories\UpdateArticleCategoryRequest;
use App\Repositories\Articles\ArticleCategoryRepository;

class ArticleCategoryService
{
    /**
     * @var ArticleCategoryRepository
     */
    public ArticleCategoryRepository $repository;

    /**
     * ArticleCategoryService constructor.
     *
     * @param ArticleCategoryRepository $repository
     */
    public function __construct(ArticleCategoryRepository $repository)
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
            ->editColumn('name', fn ($row) => $row->name)
            ->editColumn('slug', fn ($row) => $row->slug)
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'article_categories'))
            ->rawColumns(['actions', 'placeholder', 'active'])
            ->make(true);
    }

    /**
     * @param StoreArticleCategoryRequest $request
     *
     * @return ArticleCategory
     */
    public function createArticleCategory(StoreArticleCategoryRequest $request) : ArticleCategory
    {
        return $this->repository->saveArticleCategory($request->validated());
    }

    /**
     * @param UpdateArticleCategoryRequest $request
     * @param ArticleCategory              $category
     *
     * @return ArticleCategory
     */
    public function updateArticleCategory(UpdateArticleCategoryRequest $request, ArticleCategory $category) : ArticleCategory
    {
        return $this->repository->updateData($request->validated(), $category);
    }

}
