<?php

namespace App\Repositories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TagRepository extends Model
{

    /**
     * @return Collection
     */
    public function getListForSelect() : Collection
    {
        return Tag::query()
            ->get()
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
        return Tag::query()->get();
    }

    /**
     * @param array $data
     *
     * @return Tag
     */
    public function saveTag(array $data) : Tag
    {
        $tag = new Tag($data);
        $tag->save();

        return $tag->refresh();
    }

    /**
     * @param array    $data
     * @param Tag $tag
     *
     * @return Tag
     */
    public function updateData(array $data, Tag $tag) : Tag
    {
        $tag->update($data);

        return $tag->refresh();
    }

    /**
     * @param array $ids
     */
    public function deleteIds(array $ids) : void
    {
        Tag::query()
            ->whereIn('id', $ids)
            ->delete();
    }

}
