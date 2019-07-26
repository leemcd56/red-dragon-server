<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentProcessor extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
