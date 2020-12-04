<?php

namespace App\Http\Controllers\Admin\Workers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\AdminController;
use App\Services\Workers\WorkerCategoryService;
use App\Http\Requests\Workers\WorkerCategories\StoreWorkerCategoryRequest;
use App\Models\Workers\WorkerCategory;
use App\Http\Requests\Workers\WorkerCategories\UpdateWorkerCategoryRequest;
use App\Http\Requests\Workers\WorkerCategories\MassDestroyWorkerCategoryRequest;

class WorkerCategoryController extends AdminController
{

    /**
     * @var WorkerCategoryService
     */
    private WorkerCategoryService $service;

    /**
     * WorkerCategoryController constructor.
     *
     * @param WorkerCategoryService    $service
     */
    public function __construct(WorkerCategoryService $service)
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

        return view('admin.workers.categories.index');
    }

    /**
     * @return View
     */
    public function create() : View
    {
        return view('admin.workers.categories.create');
    }

    /**
     * @param StoreWorkerCategoryRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreWorkerCategoryRequest $request)
    {
        $workerCategory = $this->service->createWorkerCategory($request);

        return redirect()->route('admin.worker_categories.show', $workerCategory->id);
    }

    /**
     * @param WorkerCategory $workerCategory
     *
     * @return Application|Factory|View
     */
    public function show(WorkerCategory $workerCategory)
    {
        return view('admin.workers.categories.show', compact('workerCategory'));
    }

    /**
     * @param WorkerCategory $workerCategory
     *
     * @return Application|Factory|View
     */
    public function edit(WorkerCategory $workerCategory)
    {
        return view('admin.workers.categories.edit', compact('workerCategory'));
    }

    /**
     * @param UpdateWorkerCategoryRequest $request
     * @param WorkerCategory              $workerCategory
     *
     * @return RedirectResponse
     */
    public function update(UpdateWorkerCategoryRequest $request, WorkerCategory $workerCategory)
    {
        $workerCategory = $this->service->updateWorkerCategory($request, $workerCategory);

        return redirect()->route('admin.worker_categories.show', $workerCategory->id);
    }

    /**
     * @param WorkerCategory $workerCategory
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(WorkerCategory $workerCategory) : RedirectResponse
    {
        $workerCategory->delete();

        return back();
    }

    /**
     * @param MassDestroyWorkerCategoryRequest $request
     *
     * @return Response
     */
    public function massDestroy(MassDestroyWorkerCategoryRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
