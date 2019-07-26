<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * Determine if user is currently on the clock.
     *
     * @return boolean
     */
    public function currentSession()
    {
        return $this->timeCards->where('is_active', 1)->get();
    }

    /**
     * Returns user time cards.
     *
     * @return App\TimeClock
     */
    public function timeCards()
    {
        return $this->hasMany('App\TimeClock');
    }
}
