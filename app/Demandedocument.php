<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandedocument extends Model
{
    protected $table='demandedocuments';

    protected function user(){
        return $this->belongsTo('App\User');
    }
    
    protected function typedocument(){
        return $this->belongsTo('App\Typedocument');
    }
    protected function documentprepare(){
        return $this->hasOne('App\Documentprepare');
    }
}
