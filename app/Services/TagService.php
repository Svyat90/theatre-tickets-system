<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Http\Requests\Tags\StoreTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;
use App\Models\Tag;
use App\Repositories\TagRepository;
use Yajra\DataTables\Facades\DataTables;

class TagService
{
    /**
     * @var TagRepository
     */
    public TagRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param TagRepository $repository
     */
    public function __construct(TagRepository $repository)
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
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'tags'))
            ->rawColumns(['actions', 'placeholder', 'active'])
            ->make(true);
    }

    /**
     * @param StoreTagRequest $request
     *
     * @return Tag
     */
    public function createTag(StoreTagRequest $request) : Tag
    {
        return $this->repository->saveTag($request->validated());
    }

    /**
     * @param UpdateTagRequest $request
     * @param Tag              $category
     *
     * @return Tag
     */
    public function updateDictionary(UpdateTagRequest $request, Tag $category) : Tag
    {
        return $this->repository->updateData($request->validated(), $category);
    }

}
