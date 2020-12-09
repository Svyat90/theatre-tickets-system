<?php

namespace App\Repositories\Workers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Workers\Worker;
use App\Models\Workers\WorkerCategory;

class WorkerRepository extends Model
{

    /**
     * @return Collection
     */
    public function getCollectionToIndex() : Collection
    {
        return Worker::query()->get();
    }

    /**
     * @return Model|null
     */
    public function getTopWorker() : ? Worker
    {
        return Worker::query()
            ->active()
            ->latest()
            ->where('on_top', true)
            ->first();
    }

    /**
     * @return Collection
     */
    public function getListToHome() : Collection
    {
        return Worker::query()
            ->active()
            ->latest()
            ->where('on_home', true)
            ->limit(8)
            ->get();
    }

    /**
     * @param array $data
     *
     * @return Worker
     */
    public function saveWorker(array $data) : Worker
    {
        $worker = new Worker($data);
        $category = WorkerCategory::query()->find($data['worker_category_id']);
        $category->workers()->save($worker);

        return $worker->refresh();
    }

    /**
     * @param array    $data
     * @param Worker $worker
     *
     * @return Worker
     */
    public function updateData(array $data, Worker $worker) : Worker
    {
        $worker->update($data);

        return $worker->refresh();
    }

    /**
     * @param array $ids
     *
     * @throws \Exception
     */
    public function deleteIds(array $ids) : void
    {
        Worker::query()
            ->whereIn('id', $ids)
            ->get()
            ->each(function (Worker $workers) {
                $workers->delete();
            });
    }

}
