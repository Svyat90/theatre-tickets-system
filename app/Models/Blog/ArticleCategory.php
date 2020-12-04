<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BaseModel;

/**
 * Class Dictionary
 * @property int $id
 * @property array $name
 * @property string $slug
 */
class ArticleCategory extends BaseModel
{
    use SoftDeletes;

    /**
     * @var array|string[]
     */
    public array $translatable = ['name'];

    /**
     * @var string
     */
    public $table = 'article_categories';

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

//    /**
//     * @return BelongsTo
//     */
//    public function articles()
//    {
//        return $this->belongsTo(Article::class, 'article_category_id', 'category_id', 'article_id');
//    }

}
