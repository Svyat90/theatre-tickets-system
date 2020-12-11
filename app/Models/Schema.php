<?php

namespace App\Models;

class Schema extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'schemas';

    /**
     * @var array|string[]
     */
    protected array $translatable = ['name'];

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rows()
    {
        return $this->hasMany(Row::class);
    }

}
