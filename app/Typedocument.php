<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typedocument extends Model
{
    protected $table='typedocuments';

    protected function demandedocument(){
        return $this->hasMany('App\Demandedocument');
    }
}
