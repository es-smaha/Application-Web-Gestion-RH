<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $table='reclamations';

    protected function user(){
        return $this->belongTo('App\User');
    }
}
