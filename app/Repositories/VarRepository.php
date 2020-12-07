<?php

namespace App\Repositories;

use App\Models\VarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class VarRepository extends Model
{

    /**
     * @return Collection
     */
    public function getCollectionToIndex() : Collection
    {
        return VarModel::query()->get();
    }

    /**
     * @param array    $data
     * @param VarModel $varModel
     *
     * @return VarModel
     */
    public function updateData(array $data, VarModel $varModel) : VarModel
    {
        $varModel->update($data);

        return $varModel->refresh();
    }

}
