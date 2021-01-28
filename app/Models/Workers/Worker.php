<?php

namespace App\Models\Workers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BaseModel;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Collection;

/**
 * Class Worker
 *
 * @property int $id
 * @property boolean $active
 * @property boolean $on_home
 * @property array $name
 * @property array $title
 * @property string $text_1
 * @property string $text_2
 * @property string $text_3
 * @property string $text_4
 * @property string $text_5
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
        'name', 'title', 'text_1', 'text_2', 'text_3', 'text_4', 'text_5', 'text_6',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'title', 'on_home', 'on_top', 'active', 'order',
        'text_1', 'text_2', 'text_3', 'text_4', 'text_5', 'text_6',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'image_2', 'image_3', 'image_4',
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(WorkerCategory::class, 'worker_category_id');
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
