<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class SlugHelper
{

    /**
     * @param string|null $str
     *
     * @return string
     */
    public static function generate(? string $str = '') : string
    {
        return Str::slug($str . "-" .  Str::random(5), '-', app()->getLocale());
    }
}
