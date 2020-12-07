<?php

namespace App\Repositories;

use App\Models\Spectacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Helpers\SlugHelper;

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
     * @param Spectacle $spectacle
     *
     * @return array
     */
    public function getRelatedCategoryIds(Spectacle $spectacle) : array
    {
        return $spectacle
            ->categories
            ->pluck('id')
            ->toArray();
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
        $spectacle = new Spectacle($data);
        $spectacle->slug = SlugHelper::generate('spectacle');
        $spectacle->save();

        return $spectacle->refresh();
    }

    /**
     * @param array    $data
     * @param Spectacle $spectacle
     *
     * @return Spectacle
     */
    public function updateData(array $data, Spectacle $spectacle) : Spectacle
    {
        $spectacle->update($data);

        return $spectacle->refresh();
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
