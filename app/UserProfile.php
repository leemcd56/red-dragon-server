<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_number_1',
        'phone_number_2',
        'email_address',
        'first_name',
        'middle_initial',
        'last_name',
        'address_1',
        'address_2',
        'city',
        'state',
        'postal_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'personal_identifier',
    ];
}
