<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = [
        'row', 'color_id', 'on_loggia',
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
