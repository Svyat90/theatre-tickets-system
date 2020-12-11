<?php

namespace App\Http\Controllers\Admin\Spectacles;

use App\Http\Controllers\AdminController;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\LabelHelper;
use App\Helpers\DatatablesHelper;
use App\Models\Schema;
use Illuminate\Http\RedirectResponse;

class SchemaController extends AdminController
{

    /**
     * @param Request $request
     *
     * @return Application|Factory|View|mixed
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Schema::query()->get())
                ->addColumn('placeholder', '&nbsp;')
                ->editColumn('id', fn ($row) => $row->id)
                ->editColumn('name', fn ($row) => $row->name)
                ->editColumn('active', fn ($row) => LabelHelper::boolLabel($row->active))
                ->editColumn('created_at', fn ($row) => $row->created_at)
                ->addColumn('actions', fn ($row) => DatatablesHelper::renderActionsRow($row, 'schemas', false))
                ->rawColumns(['actions', 'placeholder', 'active'])
                ->make(true);
        }

        return view('admin.schemas.index');
    }

    /**
     * @param Schema $schema
     *
     * @return Application|Factory|View
     */
    public function show(Schema $schema)
    {
        return view('admin.schemas.show', compact('schema'));
    }

    /**
     * @param Schema $schema
     *
     * @return Application|Factory|View
     */
    public function edit(Schema $schema)
    {
        return view('admin.schemas.edit', compact('schema'));
    }

    /**
     * @param Request $request
     * @param Schema  $schema
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Schema $schema)
    {
        $schema->update($request->all());

        return redirect()->route('admin.schemas.show', $schema->id);
    }

}
