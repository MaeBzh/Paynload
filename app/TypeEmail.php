<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeEmail extends Model
{
    protected $table = "types_email";

    public $timestamps = [
        "date_creation", "date_edition"
    ];

    public function emails()
    {
        return $this->hasMany('App\Email');
    }
}
