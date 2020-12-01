<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class Dictionary
 * @property int $id
 * @property array $name
 * @property string $slug
 */
class Category extends Model
{
    use SoftDeletes, HasTranslations;

    /**
     * @var array|string[]
     */
    public array $translatable = ['name'];

    /**
     * @var string
     */
    public $table = 'categories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'slug', 'active'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'active' => 'boolean',
        'name' => 'json'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'active', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
