<?php

namespace App\Http\Controllers\Admin\Workers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Traits\MediaUploadingTrait;
use App\Http\Controllers\AdminController;
use App\Repositories\Workers\WorkerCategoryRepository;
use App\Services\Workers\WorkerService;
use App\Models\Workers\Worker;
use App\Http\Requests\Workers\Worker\StoreWorkerRequest;
use App\Http\Requests\Workers\Worker\UpdateWorkerRequest;
use App\Http\Requests\Workers\Worker\MassDestroyWorkerRequest;

class WorkerController extends AdminController
{
    use MediaUploadingTrait;

    /**
     * @var WorkerService
     */
    private WorkerService $service;

    /**
     * WorkerController constructor.
     *
     * @param WorkerService    $service
     */
    public function __construct(WorkerService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View|mixed
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->getDatatablesData();
        }

        return view('admin.workers.workers.index');
    }

    /**
     * @param Worker                   $worker
     * @param WorkerCategoryRepository $workerCategoryRepository
     *
     * @return View
     */
    public function create(Worker $worker, WorkerCategoryRepository $workerCategoryRepository) : View
    {
        $workerCategories = $workerCategoryRepository->getListForSelect();

        return view('admin.workers.workers.create', compact('worker',  'workerCategories'));
    }

    /**
     * @param StoreWorkerRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreWorkerRequest $request)
    {
        $worker = $this->service->createWorker($request);

        return redirect()->route('admin.workers.show', $worker->id);
    }

    /**
     * @param Worker $worker
     *
     * @return Application|Factory|View
     */
    public function show(Worker $worker)
    {
        return view('admin.workers.workers.show', compact('worker'));
    }

    /**
     * @param Worker                   $worker
     * @param WorkerCategoryRepository $workerCategoryRepository
     *
     * @return Application|Factory|View
     */
    public function edit(Worker $worker, WorkerCategoryRepository $workerCategoryRepository)
    {
        $workerCategories = $workerCategoryRepository->getListForSelect();

        return view('admin.workers.workers.edit', compact('worker', 'workerCategories'));
    }

    /**
     * @param UpdateWorkerRequest $request
     * @param Worker              $worker
     *
     * @return RedirectResponse
     */
    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        $worker = $this->service->updateWorker($request, $worker);

        return redirect()->route('admin.workers.show', $worker->id);
    }

    /**
     * @param Worker $worker
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Worker $worker) : RedirectResponse
    {
        $worker->delete();

        return back();
    }

    /**
     * @param MassDestroyWorkerRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function massDestroy(MassDestroyWorkerRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
