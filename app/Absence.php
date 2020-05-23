<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = [
        'jourAbsence', 'commentaire','justification', 
    ];
    protected function user(){
        return $this->belongsTo('App\User');
    }
}
