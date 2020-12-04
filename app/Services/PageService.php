<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Helpers\LabelHelper;
use App\Http\Requests\Pages\StorePageRequest;
use App\Http\Requests\Pages\UpdatePageRequest;
use App\Models\Page;
use App\Repositories\PageRepository;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\MediaHelper;
use App\Helpers\ImageHelper;

class PageService
{
    /**
     * @var PageRepository
     */
    public PageRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param PageRepository $repository
     */
    public function __construct(PageRepository $repository)
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
            ->editColumn('order', fn ($row) => $row->order)
            ->editColumn('on_header', fn ($row) => LabelHelper::boolLabel($row->on_header))
            ->editColumn('on_footer', fn ($row) => LabelHelper::boolLabel($row->on_footer))
            ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
            ->editColumn('date', fn ($row) => $row->date)
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('image', fn ($row) => ImageHelper::thumbImage($row->image))
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'pages'))
            ->rawColumns(['actions', 'placeholder', 'on_header', 'on_footer', 'active', 'image'])
            ->make(true);
    }

    /**
     * @param StorePageRequest $request
     *
     * @return Page
     */
    public function createPage(StorePageRequest $request) : Page
    {
        $page = $this->repository->savePage($request->validated());

        $this->handleMediaFiles($request, $page);
        $this->handleParent($page, $request->parent_id);

        return $page;
    }

    /**
     * @param UpdatePageRequest $request
     * @param Page              $page
     *
     * @return Page
     */
    public function updateDictionary(UpdatePageRequest $request, Page $page) : Page
    {
        $this->handleMediaFiles($request, $page);
        $this->handleParent($page, $request->parent_id);

        return $this->repository->updateData($request->validated(), $page);
    }

    /**
     * @param StorePageRequest|UpdatePageRequest   $request
     * @param Page $page
     */
    private function handleMediaFiles($request, Page $page) : void
    {
        MediaHelper::handleMedia($page, 'image', $request->image);
    }

    /**
     * @param Page $page
     * @param int|null $pageId
     */
    private function handleParent(Page $page, ? int $pageId = null) : void
    {
        if (! $pageId) {
            $page->parent()->dissociate();
            return;
        }

        $page->parent()->associate($pageId);
    }

}
