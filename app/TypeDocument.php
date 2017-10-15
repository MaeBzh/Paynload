<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
    protected $table = "types_document";

    public $timestamps = [
        "date_creation", "date_edition"
    ];

    public function dossiers(){
        return $this->hasMany('App\Dossier');
    }

    public function documents(){
        return $this->hasMany('App\DocumentDossier');
    }

    public function kyc_documents(){
        return $this->hasMany('App\KycDocument');
    }


}
