<?php

namespace App\Services\Workers;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Workers\Worker\StoreWorkerRequest;
use App\Http\Requests\Workers\Worker\UpdateWorkerRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\MediaHelper;
use App\Helpers\ImageHelper;
use App\Repositories\Workers\WorkerRepository;
use App\Models\Workers\Worker;
use Illuminate\Support\Collection;
use App\Repositories\Workers\WorkerCategoryRepository;

class WorkerService
{
    /**
     * @var WorkerRepository
     */
    public WorkerRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param WorkerRepository $repository
     */
    public function __construct(WorkerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getDatatablesData()
    {
        $collection = $this->repository->getCollectionToIndex();

        return Datatables::of($collection)
            ->addColumn('placeholder', '&nbsp;')
            ->editColumn('id', fn ($row) => $row->id)
            ->editColumn('name', fn ($row) => columnTrans($row, 'name'))
            ->editColumn('title', fn ($row) => columnTrans($row, 'title'))
            ->editColumn('on_home', fn ($row) => LabelHelper::boolLabel($row->on_home))
            ->editColumn('on_top', fn ($row) => LabelHelper::boolLabel($row->on_top))
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('image', fn ($row) => ImageHelper::thumbImage($row->image))
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'workers'))
            ->rawColumns(['actions', 'placeholder', 'on_home', 'on_top', 'active', 'image'])
            ->make(true);
    }

    /**
     * @param int|null $categoryId
     *
     * @return Collection
     */
    public function getList(? int $categoryId)
    {
        if ($categoryId) {
            return app(WorkerCategoryRepository::class)->getWorkers($categoryId);
        }

        return $this->repository->getCollectionToIndex();
    }

    /**
     * @param StoreWorkerRequest $request
     *
     * @return Worker
     */
    public function createWorker(StoreWorkerRequest $request) : Worker
    {
        $worker = $this->repository->saveWorker($request->all());

        $this->handleMediaFiles($request, $worker);
        $this->handleCategory($worker, $request->worker_category_id);

        return $worker;
    }

    /**
     * @param UpdateWorkerRequest $request
     * @param Worker              $worker
     *
     * @return Worker
     */
    public function updateWorker(UpdateWorkerRequest $request, Worker $worker) : Worker
    {
        $this->handleMediaFiles($request, $worker);
        $this->handleCategory($worker, $request->worker_category_id);

        return $this->repository->updateData($request->validated(), $worker);
    }

    /**
     * @param StoreWorkerRequest|UpdateWorkerRequest   $request
     * @param Worker $worker
     */
    private function handleMediaFiles($request, Worker $worker) : void
    {
        MediaHelper::handleMedia($worker, 'image', $request->image);
    }

    /**
     * @param Worker $worker
     * @param int|null $workerCategoryId
     */
    private function handleCategory(Worker $worker, ? int $workerCategoryId = null) : void
    {
        if (! $workerCategoryId) {
            $worker->category()->dissociate();
            return;
        }

        $worker->category()->associate($workerCategoryId);
    }

}
