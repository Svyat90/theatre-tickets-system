<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\MediaCollections\MediaCollection;
use Spatie\Image\Exceptions\InvalidManipulation;

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
 * @property Media $image_grid
 * @property Media $image_detail
 * @property MediaCollection $image_gallery
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
     * @var string[]
     */
    protected $appends = [
        'image_grid', 'image_detail', 'image_gallery'
    ];

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

    /**
     * @param Media|null $media
     *
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')
            ->width(50)
            ->width(50)
            ->sharpen(10);
    }

    /**
     * @return Media|null
     */
    public function getImageGridAttribute()
    {
        if (! $media = $this->getMedia('image_grid')->last()) {
            return null;
        }

        return $this->fillMedia($media);
    }

    /**
     * @return Media|null
     */
    public function getImageDetailAttribute()
    {
        if (! $media = $this->getMedia('image_detail')->last()) {
            return null;
        }

        return $this->fillMedia($media);
    }

    /**
     * @return Collection|null
     */
    public function getImageGalleryAttribute()
    {
        if (! $mediaCollect = $this->getMedia('image_gallery')) {
            return null;
        }

        return $mediaCollect->map(function (Media $media) {
            return $this->fillMedia($media);
        });
    }

    /**
     * @param Media $media
     *
     * @return Media
     */
    private function fillMedia(Media $media)
    {
        $media->url = $media->getUrl();
        $media->file_name = $media->getAttribute('file_name');
        $media->thumb = $media->getUrl('thumb');

        return $media;
    }

}
