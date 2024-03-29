<?php

namespace App\Repositories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Helpers\SlugHelper;
use App\Services\PageService;

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
                return $items->shift()->name;
            });
    }

    /**
     * @return Collection
     */
    public function getHeaderPages() : Collection
    {
        return Page::query()
            ->with('children')
            ->active()
            ->where('on_header', true)
            ->orderBy('order_top')
            ->get();
    }

    /**
     * @return array
     */
    public function getFooterPages() : array
    {
        $pages = Page::query()
            ->active()
            ->where('on_footer', true)
            ->orderBy('order_footer')
            ->get();

        $output = [];
        foreach ($pages as $page) {
            if (! $page->footer_column) {
                continue;
            }

            $output[$page->footer_column][] = $page;
        }

        return $output;
    }

    /**
     * @return Collection
     */
    public function getSliderList() : Collection
    {
        return Page::query()
            ->active()
            ->where('type', PageService::TYPE_SLIDER)
            ->get();
    }

    /**
     * @return Collection
     */
    public function getAssemblyList() : Collection
    {
        return Page::query()
            ->active()
            ->where('type', PageService::TYPE_ASSEMBLY)
            ->get();
    }

    /**
     * @return Collection
     */
    public function getQuotesList() : Collection
    {
        return Page::query()
            ->active()
            ->where('type', PageService::TYPE_QUOTE)
            ->get();
    }

    /**
     * @return Collection
     */
    public function getGalleryList() : Collection
    {
        return Page::query()
            ->active()
            ->where('type', PageService::TYPE_GALLERY)
            ->get()
            ->chunk(2);
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
        unset($data['image']);

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
