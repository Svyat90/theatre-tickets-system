<?php

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Collection;

/**
 * Class Spectacle
 *
 * @property string $name
 * @property string $title
 * @property string $text_1
 * @property string $text_2
 * @property string $text_3
 * @property string $text_4
 * @property string $text_5
 */
class About extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'about';

    /**
     * @var array|string[]
     */
    protected array $translatable = [
        'name', 'title', 'text_1', 'text_2', 'text_3', 'text_4', 'text_5', 'text_6',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'text_1', 'text_2', 'text_3', 'text_4', 'text_5', 'text_6',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'image_1', 'image_2', 'image_3', 'image_4', 'image_gallery'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

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

    /**
     * @return Media|null
     */
    public function getImage3Attribute()
    {
        if (! $media = $this->getMedia('image_3')->last()) {
            return null;
        }

        return $this->fillMedia($media);
    }

    /**
     * @return Media|null
     */
    public function getImage4Attribute()
    {
        if (! $media = $this->getMedia('image_4')->last()) {
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
