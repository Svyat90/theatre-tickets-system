<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\BaseModel;
use Illuminate\Support\Collection;

/**
 * Class Dictionary
 * @property int $id
 * @property array $name
 * @property string $slug
 * @property Collection articles
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
     * @return HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
