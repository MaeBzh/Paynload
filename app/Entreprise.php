<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Entreprise extends Authenticatable
{
    protected $table = 'entreprises';

    public $timestamps = [
        "date_creation",
        "date_edition",
        "date_derniere_edition_profil",
        "date_derniere_connexion"
    ];

    public function dossiers(){
        return $this->hasMany('App\Dossier');
    }

    public function kyc_documents(){
        return $this->hasMany('App\KycDocument');
    }

    public function documents(){
        return $this->hasMany('App\DocumentDossier');
    }
}
