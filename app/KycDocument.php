<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KycDocument extends Model
{
    protected $table = "kyc_documents";

    public $timestamps = [
        "date_creation", "date_edition"
    ];

    public function entreprise(){
        return $this->belongsTo('App\Entreprise');
    }

    public function type_document(){
        return $this->belongsTo('App\TypeDocument');
    }

}
