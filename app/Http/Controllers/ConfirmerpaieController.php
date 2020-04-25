<?php

namespace App\Http\Controllers;
use App\Demandeconge;
use App\user;
use App\Typeconge;
use Illuminate\Http\Request;
class ConfirmerpaieController extends Controller
{
   
   public function index(){
    $type=Typeconge::All();
    $conge=Demandeconge::All()->where('avis', '!=', 0);
    return view('resppaie.confirmerconge', ['type'=>$type,'conge'=>$conge]);
   }
    
   public function valider($id){
      $conge=Demandeconge::find($id);
      if( $conge->avis!=0){
         $conge->decision=1;
         $conge->save();
      }
       return redirect()->back();

   }
   
}


