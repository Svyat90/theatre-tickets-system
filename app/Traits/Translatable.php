<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use App\Services\TranslationService;

trait Translatable
{
    public function shareLocales() : void
    {
        $service = resolve(TranslationService::class);

        $languages = $service->getLocales();

        View::share(compact('languages'));
    }
}
