<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Tag
 *
 * @property int $id
 * @property string $name
 */
class Tag extends BaseModel
{

    /**
     * @var array|string[]
     */
    protected array $translatable = ['name'];

    /**
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * @return BelongsToMany
     */
    public function spectacles()
    {
        return $this->belongsToMany(Spectacle::class, 'spectacle_tag', 'tag_id', 'spectacle_id');
    }

}
