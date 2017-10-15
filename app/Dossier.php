<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $table = "dossiers";

    public $dates = [
        "date_creation",
        "date_edition",
        "date_paiement",
        "date_telechargement",
        "date_invalidite"
    ];

    /**
     * Genere un token unique
     * @param int $token_length
     * @return string
     */
    public static function generateToken($token_length = 20)
    {
        do {
            $token = str_random($token_length);
        } while (Dossier::where('token', $token)->exists());
        return $token;
    }

    /**
     * Genere une reference unique (ex: 171000001)
     * @return string
     */
    public static function generateReference()
    {
        $now = Carbon::now();
        $annee = substr($now->year, 2,2);
        $mois = str_pad($now->month, 2, "0", STR_PAD_LEFT);
        $max_id_dossier = str_pad(Dossier::max('id') + 1, 5, "0", STR_PAD_LEFT);
        return $annee.$mois.$max_id_dossier;
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function documents()
    {
        return $this->hasMany('App\DocumentDossier');
    }

    public function statut_dossier()
    {
        return $this->hasOne('App\StatutDossier');
    }

    public function paiement()
    {
        return $this->hasOne('App\Paiement');
    }
}
