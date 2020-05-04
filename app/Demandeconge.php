<?php

namespace App;
use App\User;
use App\Demandeconge;

use App\Notifications\Useredemandeconge;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
class Demandeconge extends Model
{

    use Notifiable; 
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
