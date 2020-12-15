<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class Page
 *
 * @property Collection $children
 * @property Page $parent
 * @property string $slug
 */
class Page extends BaseModel
{
    use SoftDeletes;

    /**
     * @var string
     */
    public $table = 'pages';

    /**
     * @var array|string[]
     */
    public array $translatable = [
        'name', 'title', 'description', 'content'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'description', 'content', 'url', 'slug',
        'order_top', 'order_footer', 'on_header', 'on_footer',
        'active', 'date', 'type', 'is_static', 'footer_column'
    ];

    /**
     * @var string[]
     */
    protected $dates = ['date'];

    /**
     * @var string[]
     */
    protected $casts = ['is_static' => 'bool'];

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKey()
    {
        return 'slug';
    }

}
