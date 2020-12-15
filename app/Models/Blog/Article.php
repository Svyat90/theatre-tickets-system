<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BaseModel;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
 * @property string $text_1
 * @property string $text_2
 * @property string $text_3
 * @property string $text_4
 * @property Media $image_1
 * @property Media $image_2
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
        'name', 'title', 'content',
        'text_1', 'text_2', 'text_3', 'text_4',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'content', 'video_url', 'slug',
        'active', 'date', 'on_home', 'text_1', 'text_2', 'text_3', 'text_4',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'image_1', 'image_2',
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

    /**
     * @return Media|null
     */
    public function getImage1Attribute()
    {
        if (! $media = $this->getMedia('image_1')->last()) {
            return null;
        }

        return $this->fillMedia($media);
    }

    /**
     * @return Media|null
     */
    public function getImage2Attribute()
    {
        if (! $media = $this->getMedia('image_2')->last()) {
            return null;
        }

        return $this->fillMedia($media);
    }

}
