<?php

namespace App\Http\Controllers;

use App\Traits\Translatable;

class AdminController extends Controller
{
    use Translatable;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->shareLocales();
    }

}
