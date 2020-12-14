<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'uid', 'first_name', 'last_name',
        'phone', 'email', 'total', 'short_desc'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function spectacles()
    {
        return $this->belongsToMany(Spectacle::class);
    }

}
