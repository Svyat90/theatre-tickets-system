<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{

    /**
     * @var string
     */
    protected $table = 'tickets';

    /**
     * @var string[]
     */
    protected $fillable = [
        'spectacle_id', 'row_id', 'col_id',
        'price', 'status', 'place', 'row'
    ];

    /**
     * @return BelongsTo
     */
    public function spectacle()
    {
        return $this->belongsTo(Spectacle::class);
    }

}
