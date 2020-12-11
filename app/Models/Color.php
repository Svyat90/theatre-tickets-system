<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    /**
     * @var string
     */
    protected $table = 'colors';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'color'];
}
