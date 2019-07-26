<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_successful_charge' => 'boolean',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sale_payments';

    /**
     * Returns payment processor (if applicable).
     *
     * @return App\PaymentProcessor
     */
    public function processor()
    {
        return $this->hasOne('App\PaymentProcessor');
    }
}
