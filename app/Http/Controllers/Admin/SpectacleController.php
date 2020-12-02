<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Spectacle;
use App\Repositories\SpectacleRepository;
use App\Services\SpectacleService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Traits\MediaUploadingTrait;
use App\Http\Requests\Spectacles\StoreSpectacleRequest;
use App\Http\Requests\Spectacles\UpdateSpectacleRequest;
use App\Http\Requests\Spectacles\MassDestroySpectacleRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\TagRepository;

class SpectacleController extends AdminController
{
    use MediaUploadingTrait;

    /**
     * @var SpectacleRepository
     */
    private SpectacleRepository $repository;

    /**
     * @var SpectacleService
     */
    private SpectacleService $service;

    /**
     * SpectacleController constructor.
     *
     * @param SpectacleRepository $repository
     * @param SpectacleService    $service
     */
    public function __construct(SpectacleRepository $repository, SpectacleService $service)
    {
        parent::__construct();
        $this->repository = $repository;
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

        return view('admin.spectacles.index');
    }

    /**
     * @param Spectacle          $spectacle
     * @param CategoryRepository $categoryRepository
     * @param TagRepository      $tagRepository
     *
     * @return View
     */
    public function create(Spectacle $spectacle, CategoryRepository $categoryRepository, TagRepository $tagRepository) : View
    {
        $categories = $categoryRepository->getListForSelect();
        $tags = $tagRepository->getListForSelect();

        return view('admin.spectacles.create', compact('spectacle', 'categories', 'tags'));
    }

    /**
     * @param StoreSpectacleRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreSpectacleRequest $request)
    {
        $spectacle = $this->service->createSpectacle($request);

        return redirect()->route('admin.spectacles.show', $spectacle->id);
    }

    /**
     * @param Spectacle $spectacle
     *
     * @return Application|Factory|View
     */
    public function show(Spectacle $spectacle)
    {
        $spectacle->load('categories', 'tags');

        return view('admin.spectacles.show', compact('spectacle'));
    }

    /**
     * @param Spectacle          $spectacle
     * @param CategoryRepository $categoryRepository
     * @param TagRepository      $tagRepository
     *
     * @return Application|Factory|View
     */
    public function edit(Spectacle $spectacle, CategoryRepository $categoryRepository, TagRepository $tagRepository)
    {
        $categories = $categoryRepository->getListForSelect();
        $tags = $tagRepository->getListForSelect();
        $categoryIds = $this->repository->getRelatedCategoryIds($spectacle);
        $tagIds = $this->repository->getRelatedTagIds($spectacle);

        return view('admin.spectacles.edit', compact('spectacle', 'categories', 'tags', 'categoryIds', 'tagIds'));
    }

    /**
     * @param UpdateSpectacleRequest $request
     * @param Spectacle              $spectacle
     *
     * @return RedirectResponse
     */
    public function update(UpdateSpectacleRequest $request, Spectacle $spectacle)
    {
        $spectacle = $this->service->updateDictionary($request, $spectacle);

        return redirect()->route('admin.spectacles.show', $spectacle->id);
    }

    /**
     * @param Spectacle $spectacle
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Spectacle $spectacle) : RedirectResponse
    {
        $spectacle->delete();

        return back();
    }

    /**
     * @param MassDestroySpectacleRequest $request
     *
     * @return Response
     */
    public function massDestroy(MassDestroySpectacleRequest $request) : Response
    {
        $this->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
