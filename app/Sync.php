<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sync extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_successful' => 'boolean',
    ];
}
