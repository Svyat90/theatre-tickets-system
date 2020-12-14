<?php

namespace App\Http\Controllers\Front;

use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\Front\Workers\IndexWorkersRequest;
use App\Helpers\CollectionHelper;
use App\Repositories\Workers\WorkerCategoryRepository;
use App\Services\Workers\WorkerService;
use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use App\Models\Workers\Worker;

class WorkerController extends FrontController
{

    /**
     * @param IndexWorkersRequest      $request
     * @param WorkerService            $service
     * @param WorkerCategoryRepository $categoryRepository
     *
     * @return Application|Factory|View
     */
    public function index(IndexWorkersRequest $request, WorkerService $service, WorkerCategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->getCollectionToIndex();
        $workerTop = $service->repository->getTopWorker();
        $workers = CollectionHelper::paginate($service->getList($request->category_id), $this->pageLimit)
            ->appends([
                'category_id' => $request->category_id
            ]);;

        return view('front.workers.index', compact('workers', 'categories', 'workerTop'));
    }

    /**
     * @param Request $request
     * @param Worker  $worker
     *
     * @return Application|Factory|View
     */
    public function show(Request $request, Worker $worker)
    {
        return view('front.workers.show', compact('worker'));
    }

}
