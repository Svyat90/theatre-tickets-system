<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Traits\MediaUploadingTrait;
use App\Http\Requests\Pages\StorePageRequest;
use App\Http\Requests\Pages\UpdatePageRequest;
use App\Http\Requests\Pages\MassDestroyPageRequest;

class PageController extends AdminController
{
    use MediaUploadingTrait;

    /**
     * @var PageService
     */
    private PageService $service;

    /**
     * PageController constructor.
     *
     * @param PageService    $service
     */
    public function __construct(PageService $service)
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

        return view('admin.pages.index');
    }

    /**
     * @param Page          $page
     *
     * @return View
     */
    public function create(Page $page) : View
    {
        $pages = $this->service->repository->getListForSelect();
        $types = $this->service->getTypes();

        return view('admin.pages.create', compact('page',  'pages', 'types'));
    }

    /**
     * @param StorePageRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StorePageRequest $request)
    {
        $page = $this->service->createPage($request);

        return redirect()->route('admin.pages.show', $page->id);
    }

    /**
     * @param Page $page
     *
     * @return Application|Factory|View
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * @param Page          $page
     *
     * @return Application|Factory|View
     */
    public function edit(Page $page)
    {
        $pages = $this->service->repository->getListForSelect($page->id);
        $parentId = $this->service->repository->getParentId($page);
        $types = $this->service->getTypes();

        return view('admin.pages.edit', compact('page', 'pages', 'parentId', 'types'));
    }

    /**
     * @param UpdatePageRequest $request
     * @param Page              $page
     *
     * @return RedirectResponse
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page = $this->service->updatePage($request, $page);

        return redirect()->route('admin.pages.show', $page->id);
    }

    /**
     * @param Page $page
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Page $page) : RedirectResponse
    {
        $page->delete();

        return back();
    }

    /**
     * @param MassDestroyPageRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function massDestroy(MassDestroyPageRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
