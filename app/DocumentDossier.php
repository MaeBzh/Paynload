<?php

namespace App;

use App\Traits\ManageFile;
use Illuminate\Database\Eloquent\Model;

class DocumentDossier extends Model
{
    protected $table = "documents";

    protected $path_attribute = "chemin";

    public $timestamps = [
        "date_creation", "date_edition"
    ];

    public function entreprise(){
        return $this->belongsTo('App\Entreprise');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function dossier(){
        return $this->belongsTo('App\Dossier');
    }

    public function type_document(){
        return $this->belongsTo('App\TypeDocument');
    }
}