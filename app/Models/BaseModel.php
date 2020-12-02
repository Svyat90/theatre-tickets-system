<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

abstract class BaseModel extends Model
{
    use HasTranslations;

    /**
     * @var array|string[]
     */
    protected array $translatable = [];

    /**
     * @return array|string[]
     */
    public function getTranslatable() : array
    {
        return $this->translatable;
    }

}
