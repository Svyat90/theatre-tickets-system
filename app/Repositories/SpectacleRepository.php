<?php

namespace App\Repositories;

use App\Models\Spectacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SpectacleRepository extends Model
{

    /**
     * @return Collection
     */
    public function getListForSelect() : Collection
    {
        return Spectacle::query()
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
        return Spectacle::query()->get();
    }

    /**
     * @param array $data
     *
     * @return Spectacle
     */
    public function saveSpectacle(array $data) : Spectacle
    {
        $category = new Spectacle($data);
        $category->save();

        return $category->refresh();
    }

    /**
     * @param array    $data
     * @param Spectacle $category
     *
     * @return Spectacle
     */
    public function updateData(array $data, Spectacle $category) : Spectacle
    {
        $category->update($data);

        return $category->refresh();
    }

    /**
     * @param array $ids
     *
     * @throws \Exception
     */
    public function deleteIds(array $ids) : void
    {
        Spectacle::query()
            ->whereIn('id', $ids)
            ->get()
            ->each(function (Spectacle $spectacle) {
                $spectacle->delete();
            });
    }

}
