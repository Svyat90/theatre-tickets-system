<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = [
        'index', 'color_id', 'price', 'on_loggia',
        'on_balcony', 'on_left', 'on_right'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schema()
    {
        return $this->belongsTo(Schema::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cols()
    {
        return $this->hasMany(Col::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
