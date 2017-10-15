<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    public $timestamps = [
        "date_creation",
        "date_edition",
        "date_derniere_edition_profil",
        "date_derniere_connexion"
    ];

    protected $fillable = [];

    protected $hidden = [
        'password'
    ];


}
