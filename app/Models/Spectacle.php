<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Spectacle
 *
 * @property array $name
 * @property array $author
 * @property array $producer
 * @property array $description
 * @property string $slug
 * @property string $start_at
 * @property int $duration
 * @property int $min_age
 * @property bool $active
 * @property string $image_grid
 * @property string $image_detail
 * @property string $image_gallery
 */
class Spectacle extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    /**
     * @var array|string[]
     */
    protected array $translatable = [
        'name', 'author', 'producer', 'description'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'author', 'producer', 'description', 'slug',
        'min_age', 'duration', 'active', 'start_at'
    ];

    /**
     * @param Media|null $media
     *
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->sharpen(10);
    }

    /**
     * @return BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'spectacle_category', 'spectacle_id', 'category_id');
    }

    /**
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'spectacle_tag', 'spectacle_id', 'tag_id');
    }

}
