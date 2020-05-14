<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Notification;
use Laravelista\Comments\Commenter;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Commenter;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'prenom','cne', 'ko', 'poste', 'tele' , 'dateembauche' , 'solde' ,'kochef' ,'image' , 'email' , 'password', 
    ];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table='users';
    protected function service(){
        return $this->belongsTo('App\Service');
    }
    protected function demandeconge(){
        return $this->hasMany('App\Demandeconge');
    }
  
   
    protected function reclamation(){
        return $this->hasMany('App\Reclamation');
    }
    protected function demandedocument(){
        return $this->hasMany('App\Demandedocument');
    }
}

