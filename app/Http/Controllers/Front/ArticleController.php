<?php

namespace App\Http\Controllers\Front;

use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\Front\Articles\IndexArticlesRequest;
use App\Helpers\CollectionHelper;
use App\Repositories\Articles\ArticleCategoryRepository;
use App\Services\Blog\ArticleService;
use App\Models\Blog\Article;
use App\Http\Controllers\FrontController;

class ArticleController extends FrontController
{

    /**
     * @param IndexArticlesRequest $request
     * @param ArticleService   $service
     * @param ArticleCategoryRepository    $categoryRepository
     *
     * @return Application|Factory|View
     */
    public function index(IndexArticlesRequest $request, ArticleService $service, ArticleCategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->getCollectionToIndex();
        $articleVideo = $service->repository->getArticleWithVideo();
        $articles = CollectionHelper::paginate($service->getList($request->category_id), $this->pageLimit)
            ->appends([
                'category_id' => $request->category_id
            ]);;

        return view('front.articles.index', compact('articles', 'categories', 'articleVideo'));
    }

    /**
     * @param Article $article
     *
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        return view('front.articles.show', compact('article'));
    }

}
