<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentprepare extends Model
{
    protected $table='documentprepares';

    protected function demandedocument(){
        return $this->belongsTo('App\Demandedocument');
    }
}
