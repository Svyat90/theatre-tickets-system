<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use App\Repositories\VarRepository;
use Illuminate\Support\Facades\App;

trait VarTrait
{
    public function shareVars() : void
    {
        $service = app(VarRepository::class);

        $vars = [];
        foreach ($service->getAllVars() as $key => $var) {
            $key = substr_replace($key, '', -3);
            $vars[$key] = $var;
        }

        View::share(compact('vars'));
    }
}
