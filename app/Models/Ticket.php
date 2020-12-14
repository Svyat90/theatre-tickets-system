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
        'spectacle_id', 'row_id', 'col_id', 'order_id',
        'price', 'status', 'place', 'row', 'name'
    ];

    /**
     * @return BelongsTo
     */
    public function spectacle()
    {
        return $this->belongsTo(Spectacle::class);
    }

    /**
     * @return BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
