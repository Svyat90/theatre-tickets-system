<?php

namespace App\Repositories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Helpers\SlugHelper;

class PageRepository extends Model
{

    /**
     * @param int $exceptId
     *
     * @return Collection
     */
    public function getListForSelect(int $exceptId = 0) : Collection
    {
        return Page::query()
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
        return Page::query()->get();
    }

    /**
     * @param Page $page
     *
     * @return int|null
     */
    public function getParentId(Page $page)
    {
        return $page
            ->parent()
            ->value('id') ?? null;
    }

    /**
     * @param array $data
     *
     * @return Page
     */
    public function savePage(array $data) : Page
    {
        $page = new Page($data);
        $page->slug = SlugHelper::generate('page');
        $page->save();

        return $page->refresh();
    }

    /**
     * @param array    $data
     * @param Page $page
     *
     * @return Page
     */
    public function updateData(array $data, Page $page) : Page
    {
        $page->update($data);

        return $page->refresh();
    }

    /**
     * @param array $ids
     *
     * @throws \Exception
     */
    public function deleteIds(array $ids) : void
    {
        Page::query()
            ->whereIn('id', $ids)
            ->get()
            ->each(function (Page $page) {
                $page->delete();
            });
    }

}
