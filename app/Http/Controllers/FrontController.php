<?php

namespace App\Http\Controllers;

use App\Traits\VarTrait;
use App\Traits\SettingsTrait;

class FrontController extends Controller
{
    use VarTrait, SettingsTrait;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->shareVars();
        $this->sharePages();
    }

}
