<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutPaiement extends Model
{
    protected $table = "statuts_paiement";

    public $timestamps = [
      "date_creation", "date_edition"
    ];

    public function paiements(){
        return $this->hasMany('App\Paiement');
    }
}
