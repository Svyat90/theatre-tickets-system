<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Traits\MediaUploadingTrait;
use App\Http\Controllers\AdminController;
use App\Services\Blog\ArticleService;
use App\Models\Blog\Article;
use App\Http\Requests\Blog\Articles\UpdateArticleRequest;
use App\Http\Requests\Blog\Articles\MassDestroyArticleRequest;
use App\Http\Requests\Blog\Articles\StoreArticleRequest;
use App\Repositories\Articles\ArticleCategoryRepository;

class ArticleController extends AdminController
{
    use MediaUploadingTrait;

    /**
     * @var ArticleService
     */
    private ArticleService $service;

    /**
     * ArticleController constructor.
     *
     * @param ArticleService    $service
     */
    public function __construct(ArticleService $service)
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

        return view('admin.blog.articles.index');
    }

    /**
     * @param Article                   $article
     * @param ArticleCategoryRepository $articleCategoryRepository
     *
     * @return View
     */
    public function create(Article $article, ArticleCategoryRepository $articleCategoryRepository) : View
    {
        $articleCategories = $articleCategoryRepository->getListForSelect();

        return view('admin.blog.articles.create', compact('article',  'articleCategories'));
    }

    /**
     * @param StoreArticleRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreArticleRequest $request)
    {
        $article = $this->service->createArticle($request);

        return redirect()->route('admin.articles.show', $article->id);
    }

    /**
     * @param Article $article
     *
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        return view('admin.blog.articles.show', compact('article'));
    }

    /**
     * @param Article                   $article
     * @param ArticleCategoryRepository $articleCategoryRepository
     *
     * @return Application|Factory|View
     */
    public function edit(Article $article, ArticleCategoryRepository $articleCategoryRepository)
    {
        $articleCategories = $articleCategoryRepository->getListForSelect();

        return view('admin.blog.articles.edit', compact('article', 'articleCategories'));
    }

    /**
     * @param UpdateArticleRequest $request
     * @param Article              $article
     *
     * @return RedirectResponse
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article = $this->service->updateArticle($request, $article);

        return redirect()->route('admin.articles.show', $article->id);
    }

    /**
     * @param Article $article
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Article $article) : RedirectResponse
    {
        $article->delete();

        return back();
    }

    /**
     * @param MassDestroyArticleRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function massDestroy(MassDestroyArticleRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
