<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = "historique_paiements";

    public $timestamps = [
        "date_paiement"
    ];

    public function dossier(){
        return $this->belongsTo('App\Dossier');
    }

    public function statut_paiement(){
        return $this->belongsTo('App\StatutPaiement');
    }
}
