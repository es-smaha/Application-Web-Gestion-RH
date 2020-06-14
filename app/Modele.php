<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $table='modeles';
    protected $fillable=['nom', 'prenom', 'matricule','service','lundi', 'mardi','mercredi','jeudi','vendredi','samedi','dimanche'];

}
