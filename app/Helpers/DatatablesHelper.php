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
        $view = $withDelete ? 'datatables-actions-show-read-del' : 'datatables-actions-show-read';

        return view("admin.partials.$view", compact(
            'entityName',
            'row'
        ));
    }

}
