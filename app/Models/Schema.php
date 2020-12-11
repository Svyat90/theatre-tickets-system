<?php

namespace App\Models;

class Schema extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'schemas';

    /**
     * @var array|string[]
     */
    protected array $translatable = ['name'];

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'active'];

}
