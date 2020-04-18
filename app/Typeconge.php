<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeconge extends Model
{
    protected $table='typeconges';

    protected function demandeconge(){
        return $this->hasMany('App\Demandeconge');
    }
}
