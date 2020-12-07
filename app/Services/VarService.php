<?php

namespace App\Services;

use App\Helpers\DatatablesHelper;
use App\Http\Requests\Vars\UpdateVarRequest;
use App\Models\VarModel;
use App\Repositories\VarRepository;
use Yajra\DataTables\Facades\DataTables;

class VarService
{
    /**
     * @var VarRepository
     */
    public VarRepository $repository;

    /**
     * DictionaryService constructor.
     *
     * @param VarRepository $repository
     */
    public function __construct(VarRepository $repository)
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
            ->editColumn('val_ru', fn ($row) => $row->val_ru)
            ->editColumn('val_ro', fn ($row) => $row->val_ro)
            ->editColumn('val_en', fn ($row) => $row->val_en)
            ->editColumn('created_at', fn ($row) => $row->created_at)
            ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'vars'))
            ->rawColumns(['actions', 'placeholder'])
            ->make(true);
    }

    /**
     * @param UpdateVarRequest $request
     * @param VarModel              $var
     *
     * @return VarModel
     */
    public function updateVar(UpdateVarRequest $request, VarModel $var) : VarModel
    {
        return $this->repository->updateData($request->validated(), $var);
    }

}
