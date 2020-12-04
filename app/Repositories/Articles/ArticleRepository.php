<?php

namespace App\Repositories\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Helpers\SlugHelper;
use App\Models\Blog\Article;
use App\Models\Blog\ArticleCategory;

class ArticleRepository extends Model
{

    /**
     * @return Collection
     */
    public function getCollectionToIndex() : Collection
    {
        return Article::query()->get();
    }

    /**
     * @param array $data
     *
     * @return Article
     */
    public function saveArticle(array $data) : Article
    {
        $article = new Article($data);
        $article->slug = SlugHelper::generate('article');

        $category = ArticleCategory::query()->find($data['article_category_id']);
        $category->articles()->save($article);

        return $article->refresh();
    }

    /**
     * @param array    $data
     * @param Article $article
     *
     * @return Article
     */
    public function updateData(array $data, Article $article) : Article
    {
        $article->update($data);

        return $article->refresh();
    }

    /**
     * @param array $ids
     *
     * @throws \Exception
     */
    public function deleteIds(array $ids) : void
    {
        Article::query()
            ->whereIn('id', $ids)
            ->get()
            ->each(function (Article $article) {
                $article->delete();
            });
    }

}
