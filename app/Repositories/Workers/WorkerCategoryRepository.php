<?php

namespace App\Repositories\Workers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Helpers\SlugHelper;
use App\Models\Workers\WorkerCategory;

class WorkerCategoryRepository extends Model
{

    /**
     * @param int $exceptId
     *
     * @return Collection
     */
    public function getListForSelect(int $exceptId = 0) : Collection
    {
        return WorkerCategory::query()
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
        return WorkerCategory::query()->get();
    }

    /**
     * @param array $data
     *
     * @return WorkerCategory
     */
    public function saveWorkerCategory(array $data) : WorkerCategory
    {
        $category = new WorkerCategory($data);
        $category->slug = SlugHelper::generate('worker-category');
        $category->save();

        return $category->refresh();
    }

    /**
     * @param array    $data
     * @param WorkerCategory $category
     *
     * @return WorkerCategory
     */
    public function updateData(array $data, WorkerCategory $category) : WorkerCategory
    {
        $category->update($data);

        return $category->refresh();
    }

    /**
     * @param array $ids
     */
    public function deleteIds(array $ids) : void
    {
        WorkerCategory::query()
            ->whereIn('id', $ids)
            ->delete();
    }

}
