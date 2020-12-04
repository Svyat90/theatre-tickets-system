<?php

namespace App\Repositories\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Blog\ArticleCategory;
use App\Helpers\SlugHelper;

class ArticleCategoryRepository extends Model
{

    /**
     * @param int $exceptId
     *
     * @return Collection
     */
    public function getListForSelect(int $exceptId = 0) : Collection
    {
        return ArticleCategory::query()
            ->get()
            ->filter(function ($item) use ($exceptId) {
                return $item->id !== $exceptId;
            })
            ->groupBy('id', true)
            ->map(function (Collection $items) {
                return columnTrans($items->shift(), 'name');
            });
    }

    /**
     * @return Collection
     */
    public function getCollectionToIndex() : Collection
    {
        return ArticleCategory::query()->get();
    }

    /**
     * @param array $data
     *
     * @return ArticleCategory
     */
    public function saveArticleCategory(array $data) : ArticleCategory
    {
        $category = new ArticleCategory($data);
        $category->slug = SlugHelper::generate('article-category');
        $category->save();

        return $category->refresh();
    }

    /**
     * @param array    $data
     * @param ArticleCategory $category
     *
     * @return ArticleCategory
     */
    public function updateData(array $data, ArticleCategory $category) : ArticleCategory
    {
        $category->update($data);

        return $category->refresh();
    }

    /**
     * @param array $ids
     */
    public function deleteIds(array $ids) : void
    {
        ArticleCategory::query()
            ->whereIn('id', $ids)
            ->delete();
    }

}
