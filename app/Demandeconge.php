<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandeconge extends Model
{
    protected $fillable = [
        'datedebut', 'datefin', 'jour' ,'raison', 
    ];
    protected $table='demandeconges';
    protected function  user(){
         return $this->belongsTo('App\User');

    }
    protected function typeconge(){
        return $this->belongsTo('App\Typeconge');
    }
    protected function motif(){
        return $this->hasOne('App\Motif');
    }
    protected function congeaccepte(){
        return $this->hasOne('App\Congeaccepte');
    }
    
}
