<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'prenom', 'adress' ,'cne', 'ko', 'poste', 'tele' , 'dateembauche' , 'solde' , 'salaire' ,'image' , 'email' , 'password', 
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
    protected function demandeconge(){
        return $this->hasMany('App\Demandeconge');
    }
  
    protected function service(){
        return $this->belongsTo('App\Service');
    }
    protected function reclamation(){
        return $this->hasMany('App\Reclamation');
    }
    protected function demandedocument(){
        return $this->hasMany('App\Demandedocument');
    }
}

