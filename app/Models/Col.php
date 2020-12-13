<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Col extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = [
        'seat', 'on_left', 'on_right'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Row::class);
    }

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at', 'updated_at', 'on_left', 'on_right'
    ];

}
