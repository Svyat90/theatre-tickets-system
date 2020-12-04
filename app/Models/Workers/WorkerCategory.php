<?php

namespace App\Models\Workers;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BaseModel;
use Illuminate\Support\Collection;

/**
 * Class WorkerCategory
 * @property int $id
 * @property array $name
 * @property string $slug
 * @property Collection articles
 */
class WorkerCategory extends BaseModel
{
    use SoftDeletes;

    /**
     * @var array|string[]
     */
    public array $translatable = ['name'];

    /**
     * @var string
     */
    public $table = 'worker_categories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'slug', 'active'
    ];

//    /**
//     * @return HasMany
//     */
//    public function articles()
//    {
//        return $this->hasMany(Worker::class);
//    }

}
