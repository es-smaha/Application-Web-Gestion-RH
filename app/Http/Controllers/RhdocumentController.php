<?php

namespace App\Http\Controllers;
use App\Demandedocument;
use App\User;
use App\Typedocument;

use Illuminate\Http\Request;

class RhdocumentController extends Controller
{
    public function index(){

        $demandedocument=Demandedocument::all();
        
        $demandedocuments=$demandedocument->where('etat',false);
        
        return view('resprh.document.index', ['demandedocuments'=> $demandedocuments,'demandedocument'=> $demandedocument]);
    }
   
    public function valider($id)
    {
        $demandedocuments=Demandedocument::find($id);
            
               $demandedocuments->etat=1;
               $demandedocuments->save();
            
             return redirect()->back();
      
         
    }


}
