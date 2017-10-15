<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $table = 'clients';

    public $timestamps = [
        "date_creation",
        "date_edition",
        "date_derniere_edition_profil",
        "date_derniere_connexion"
    ];

    protected $fillable = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function documents(){
        return $this->hasMany('App\DocumentDossier');
    }

    public function dossiers(){
        return $this->hasMany('App\Dossier');
    }
}
