<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motif extends Model
{
    protected $table='motifs';

    protected function demandeconge(){
        return $this->belongsTo('App\Demandeconge');
    }
}
