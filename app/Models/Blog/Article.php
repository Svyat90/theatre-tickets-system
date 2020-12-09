<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BaseModel;

/**
 * Class Article
 *
 * @property int $id
 * @property string $slug
 * @property string $video_url
 * @property boolean $active
 * @property array $name
 * @property array $title
 * @property array $description
 * @property string $date
 * @property string $image
 */
class Article extends BaseModel
{
    use SoftDeletes;

    /**
     * @var string
     */
    public $table = 'articles';

    /**
     * @var array|string[]
     */
    public array $translatable = [
        'name', 'title', 'content'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'content', 'video_url', 'slug',
        'active', 'date', 'on_home'
    ];

    /**
     * @var string[]
     */
    protected $dates = ['date'];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

}
