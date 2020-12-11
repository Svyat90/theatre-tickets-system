<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Col extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = ['index'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Row::class);
    }

}
