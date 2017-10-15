<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutDossier extends Model
{
    protected $table = "statuts_dossier";

    public $timestamps = [
        "date_creation", "date_edition"
    ];

    public function dossiers(){
            return $this->hasMany('App\Dossier');
    }
}
