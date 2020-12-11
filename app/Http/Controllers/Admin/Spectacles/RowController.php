<?php

namespace App\Http\Controllers\Admin\Spectacles;

use App\Http\Controllers\AdminController;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Models\Row;
use Illuminate\Http\RedirectResponse;
use App\Models\Color;

class RowController extends AdminController
{

    /**
     * @param Row $row
     *
     * @return Application|Factory|View
     */
    public function show(Row $row)
    {
        return view('admin.rows.show', compact('row'));
    }

    /**
     * @param Row $row
     *
     * @return Application|Factory|View
     */
    public function edit(Row $row)
    {
        $colors = Color::query()->pluck('name', 'id')->toArray();

        return view('admin.rows.edit', compact('row', 'colors'));
    }

    /**
     * @param Request $request
     * @param Row  $row
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Row $row)
    {
        $row->update($request->all());

        return redirect()->route('admin.rows.show', $row->id);
    }

}
