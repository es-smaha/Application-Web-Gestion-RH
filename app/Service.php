<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    protected $table='services';

    protected function users(){
        return $this->hasMany('App\User');
    }
}
