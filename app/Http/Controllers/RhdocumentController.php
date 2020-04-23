<?php

namespace App\Http\Controllers;
use App\Demandedocument;
use App\User;
use App\Typedocument;

use Illuminate\Http\Request;

class RhdocumentController extends Controller
{
    public function index(){
        $demandedocuments=Demandedocument::All();
        $typedoc=Typedocument::All();
        $user=User::All();
        return view('resprh.document.index', ['typedoc'=>$typedoc,'user'=>$user, 'demandedocuments'=> $demandedocuments]);
    }


}
