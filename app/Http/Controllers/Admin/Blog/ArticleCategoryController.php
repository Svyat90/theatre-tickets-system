<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\AdminController;
use App\Models\Blog\ArticleCategory;
use App\Http\Requests\Blog\ArticleCategories\UpdateArticleCategoryRequest;
use App\Http\Requests\Blog\ArticleCategories\MassDestroyArticleCategoryRequest;
use App\Http\Requests\Blog\ArticleCategories\StoreArticleCategoryRequest;
use App\Services\Articles\ArticleCategoryService;

class ArticleCategoryController extends AdminController
{

    /**
     * @var ArticleCategoryService
     */
    private ArticleCategoryService $service;

    /**
     * ArticleCategoryController constructor.
     *
     * @param ArticleCategoryService    $service
     */
    public function __construct(ArticleCategoryService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View|mixed
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->getDatatablesData();
        }

        return view('admin.blog.categories.index');
    }

    /**
     * @return View
     */
    public function create() : View
    {
        return view('admin.blog.categories.create');
    }

    /**
     * @param StoreArticleCategoryRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreArticleCategoryRequest $request)
    {
        $articleCategory = $this->service->createArticleCategory($request);

        return redirect()->route('admin.article_categories.show', $articleCategory->id);
    }

    /**
     * @param ArticleCategory $articleCategory
     *
     * @return Application|Factory|View
     */
    public function show(ArticleCategory $articleCategory)
    {
        return view('admin.blog.categories.show', compact('articleCategory'));
    }

    /**
     * @param ArticleCategory $articleCategory
     *
     * @return Application|Factory|View
     */
    public function edit(ArticleCategory $articleCategory)
    {
        return view('admin.blog.categories.edit', compact('articleCategory'));
    }

    /**
     * @param UpdateArticleCategoryRequest $request
     * @param ArticleCategory              $articleCategory
     *
     * @return RedirectResponse
     */
    public function update(UpdateArticleCategoryRequest $request, ArticleCategory $articleCategory)
    {
        $articleCategory = $this->service->updateArticleCategory($request, $articleCategory);

        return redirect()->route('admin.article_categories.show', $articleCategory->id);
    }

    /**
     * @param ArticleCategory $articleCategory
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(ArticleCategory $articleCategory) : RedirectResponse
    {
        $articleCategory->delete();

        return back();
    }

    /**
     * @param MassDestroyArticleCategoryRequest $request
     *
     * @return Response
     */
    public function massDestroy(MassDestroyArticleCategoryRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
