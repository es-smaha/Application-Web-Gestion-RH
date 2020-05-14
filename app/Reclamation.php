<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Reclamation extends Model
{
    use Commentable;
    protected $table='reclamations';

    protected function user(){
        return $this->belongsTo('App\User');
    }
}
