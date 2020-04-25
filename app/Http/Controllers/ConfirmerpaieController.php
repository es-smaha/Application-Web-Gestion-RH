<?php

namespace App\Http\Controllers;
use App\Demandeconge;
use App\User;
use App\Typeconge;
use Illuminate\Http\Request;
class ConfirmerpaieController extends Controller
{
   
   public function index(){
    $type=Typeconge::All();
    $conge=Demandeconge::All()->where('avis', '!=', 0);
    return view('resppaie.confirmerconge', ['type'=>$type,'conge'=>$conge]);
   }
    
   public function valider( Request $request ,$id){
      $conge=Demandeconge::find($id);

      if( $conge->avis!=0){
         $us=$conge->user_id;
         $user=User::find($us);
         $conge->decision=1;
         $conge->save();
         $user->solde = $user->solde - $conge->jour;
         $user->save();
      }
       return redirect()->back();
         
   }
   
}


