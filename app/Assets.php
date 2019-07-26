<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'purchased_at' => 'datetime',
    ];
}
