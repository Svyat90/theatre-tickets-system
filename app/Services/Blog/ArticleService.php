<?php

namespace App\Services\Blog;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Blog\Articles\StoreArticleRequest;
use App\Http\Requests\Blog\Articles\UpdateArticleRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\MediaHelper;
use App\Helpers\ImageHelper;
use App\Repositories\Articles\ArticleRepository;
use App\Models\Blog\Article;
use Illuminate\Support\Collection;
use App\Repositories\Articles\ArticleCategoryRepository;

class ArticleService
{
    /**
     * @var ArticleRepository
     */
    public ArticleRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
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
            ->editColumn('title', fn ($row) => $row->title)
            ->editColumn('on_home', fn ($row) => LabelHelper::boolLabel($row->on_home))
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('date', fn ($row) => $row->date)
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('image', fn ($row) => ImageHelper::thumbImage($row->image))
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'articles'))
            ->rawColumns(['actions', 'placeholder', 'on_header', 'on_footer', 'on_home', 'active', 'image'])
            ->make(true);
    }

    /**
     * @param int|null $categoryId
     *
     * @return Collection
     */
    public function getList(? int $categoryId)
    {
        if ($categoryId) {
            return app(ArticleCategoryRepository::class)->getArticles($categoryId);
        }

        return $this->repository->getCollectionToIndex();
    }

    /**
     * @param StoreArticleRequest $request
     *
     * @return Article
     */
    public function createArticle(StoreArticleRequest $request) : Article
    {
        $article = $this->repository->saveArticle($request->all());

        $this->handleMediaFiles($request, $article);
        $this->handleCategory($article, $request->article_category_id);

        return $article;
    }

    /**
     * @param UpdateArticleRequest $request
     * @param Article              $article
     *
     * @return Article
     */
    public function updateArticle(UpdateArticleRequest $request, Article $article) : Article
    {
        $this->handleMediaFiles($request, $article);
        $this->handleCategory($article, $request->article_category_id);

        return $this->repository->updateData($request->validated(), $article);
    }

    /**
     * @param StoreArticleRequest|UpdateArticleRequest   $request
     * @param Article $article
     */
    private function handleMediaFiles($request, Article $article) : void
    {
        MediaHelper::handleMedia($article, 'image', $request->image);
        MediaHelper::handleMedia($article, 'image_1', $request->image_1);
        MediaHelper::handleMedia($article, 'image_2', $request->image_2);
    }

    /**
     * @param Article $article
     * @param int|null $articleCategoryId
     */
    private function handleCategory(Article $article, ? int $articleCategoryId = null) : void
    {
        if (! $articleCategoryId) {
            $article->category()->dissociate();
            return;
        }

        $article->category()->associate($articleCategoryId);
    }

}
