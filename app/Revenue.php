<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'audit_start_at' => 'datetime',
        'audit_end_at' => 'datetime',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'audit_revenue';
}
