<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
 */
class Spectacle extends Model implements HasMedia
{
    use HasTranslations,
        InteractsWithMedia;

    /**
     * @var array|string[]
     */
    protected array $translatable = [
        'name', 'author', 'producer', 'description'
    ];

    /**
     * @return array|string[]
     */
    public function getTranslatable() : array
    {
        return $this->translatable;
    }

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
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->sharpen(10);
    }
}
