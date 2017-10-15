<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "historique_emails";

    public $timestamps = [
      "date_envoi"
    ];

    public function type_email(){
        return $this->belongsTo('App\TypeEmail');
    }
}
