<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'id_social', 'red', 'avatar_imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

}
