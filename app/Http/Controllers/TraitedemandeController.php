<?php

namespace App\Http\Controllers;
use App\user;
use App\Typeconge;
use App\Demandeconge;
use Illuminate\Http\Request;

class TraitedemandeController extends Controller
{
   public function index(){
    $type=Typeconge::All();
    $conge=Demandeconge::All();
    return view('chefh.demande', ['type'=>$type,'conge'=>$conge, ]);
   }
   public function confirmer($id){
      $conge=Demandeconge::find($id);
      if( $conge->avis==0){
         $conge->avis=1;
         $conge->save();
      }
       return redirect()->back();

   }
}
