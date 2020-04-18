<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congeaccepte extends Model
{
    
   

    protected $table='congeacceptes';

    protected function demandeconge(){
        return $this->belongsTo('App\Demandeconge');
    }
}
