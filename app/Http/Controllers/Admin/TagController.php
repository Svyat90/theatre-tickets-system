<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\Tags\MassDestroyTagRequest;
use App\Http\Requests\Tags\StoreTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class TagController extends AdminController
{
    /**
     * @var TagService
     */
    private TagService $service;

    /**
     * TagController constructor.
     *
     * @param TagService    $service
     */
    public function __construct(TagService $service)
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

        return view('admin.tags.index');
    }

    /**
     * @return View
     */
    public function create() : View
    {
        return view('admin.tags.create');
    }

    /**
     * @param StoreTagRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreTagRequest $request)
    {
        $tag = $this->service->createTag($request);

        return redirect()->route('admin.tags.show', $tag->id);
    }

    /**
     * @param Tag $tag
     *
     * @return Application|Factory|View
     */
    public function show(Tag $tag)
    {
        $tag->load('spectacles');

        return view('admin.tags.show', compact('tag'));
    }

    /**
     * @param Tag $tag
     *
     * @return Application|Factory|View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * @param UpdateTagRequest $request
     * @param Tag              $tag
     *
     * @return RedirectResponse
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag = $this->service->updateDictionary($request, $tag);

        return redirect()->route('admin.tags.show', $tag->id);
    }

    /**
     * @param Tag $tag
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Tag $tag) : RedirectResponse
    {
        $tag->delete();

        return back();
    }

    /**
     * @param MassDestroyTagRequest $request
     *
     * @return Response
     */
    public function massDestroy(MassDestroyTagRequest $request) : Response
    {
        $this->service->repository->deleteIds($request->ids);

        return response()->noContent();
    }

}
