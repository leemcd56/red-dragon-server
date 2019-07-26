<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * Returns all payments, whether successful or not.
     *
     * @return App\Payment
     */
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    /**
     * Returns all refunds on this sale.
     *
     * @return App\Refund
     */
    public function refunds()
    {
        return $this->hasMany('App\Refund');
    }
}
