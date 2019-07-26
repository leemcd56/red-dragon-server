<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expires_at' => 'datetime',
        'is_active' => 'boolean',
        'is_employee_discount' => 'boolean',
        'is_manager_locked' => 'boolean',
        'is_permanent' => 'boolean',
    ];
}
