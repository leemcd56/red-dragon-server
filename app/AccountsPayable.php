<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountsPayable extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'due_at' => 'datetime',
    ];
}
