<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeClock extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
        'time_in_at' => 'datetime',
        'time_out_at' => 'datetime',
    ];
}
