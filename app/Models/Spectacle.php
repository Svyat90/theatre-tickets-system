<?php

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\MediaCollections\MediaCollection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
 * @property int $schema_id
 */
class Spectacle extends BaseModel
{
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
        'name', 'author', 'producer', 'description', 'slug', 'schema_id',
        'min_age', 'duration', 'active', 'start_at', 'is_premiera'
    ];

    /**
     * @var string[]
     */
    protected $dates = ['start_at'];

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
     * @return BelongsTo
     */
    public function schema()
    {
        return $this->belongsTo(Schema::class);
    }

    /**
     * @return HasMany
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
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

}
