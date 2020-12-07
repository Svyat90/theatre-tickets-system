<?php

namespace App\Models\Workers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BaseModel;

/**
 * Class Worker
 *
 * @property int $id
 * @property boolean $active
 * @property boolean $on_home
 * @property array $name
 * @property array $title
 */
class Worker extends BaseModel
{
    use SoftDeletes;

    /**
     * @var string
     */
    public $table = 'workers';

    /**
     * @var array|string[]
     */
    public array $translatable = [
        'name', 'title'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'on_home', 'active'
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(WorkerCategory::class, 'worker_category_id');
    }

}
