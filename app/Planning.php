<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $table='plannings';
    protected $fillable=['user','lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];

}
