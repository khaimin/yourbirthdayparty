<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ThanhVien extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'thanh_viens';
    protected $fillable = [
        'name', 'email', 'password','rule',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
