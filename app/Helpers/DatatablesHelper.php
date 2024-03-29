<?php

namespace App\Helpers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class DatatablesHelper
{

    /**
     * @param Model  $row
     * @param string $entityName
     * @param bool   $withDelete
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public static function renderActionsRow(Model $row, string $entityName, bool $withDelete = true)
    {
        // check on static pages
        if (isset($row->is_static) && $row->is_static) {
            $view = 'datatables-actions-show-read';

        } else {
            $view = $withDelete ? 'datatables-actions-show-read-del' : 'datatables-actions-show-read';
        }

        return view("admin.partials.$view", compact(
            'entityName',
            'row'
        ));
    }

}
