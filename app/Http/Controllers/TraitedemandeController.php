<?php

namespace App\Http\Controllers;
use App\user;
use App\Motif;

use App\Typeconge;
use App\Demandeconge;
use Illuminate\Http\Request;

class TraitedemandeController extends Controller
{
   public function index(){
    $type=Typeconge::All();
   
    $conge=Demandeconge::All()->where('avis','=',0);
   
    return view('chefh.demande', ['type'=>$type,'conge'=>$conge,]);
   }
   public function accepter(){
      $type=Typeconge::All();
      $conge=Demandeconge::All()->where('avis',"=", 1);
   
      return view('chefh.archiveaccepeter', ['type'=>$type,'conge'=>$conge, ]);
     }
   public function refuser(){
      $type=Typeconge::All();
      $conge=Demandeconge::All()->where('avis','=',2);
     
      return view('chefh.archiverefuse', ['type'=>$type,'conge'=>$conge, ]);
     }
    
   public function valider($id){
      $conge=Demandeconge::find($id);
      if( $conge->avis==0){
         $conge->avis=1;
         $conge->save();
      }
      return redirect('conge-accepter');
   }
   public function refuuseer($id){
      $conge=Demandeconge::find($id);
      if( $conge->avis==0){
         $conge->avis=2;
         $conge->save();
      }
       return redirect('conge-refuser');
   }
   
   public function destroy($id){
      $conge=Demandeconge::find($id);
        $conge->delete();
       return redirect()->back();

   }
   public function store(Request $request ){
      $id=$request->demandeconge_id;
      $motif=new Motif();
      $conge=Demandeconge::find($id);
      if($conge->motif==0){
         $conge->motif=1;
         $conge->save();
      }
      $motif->justification=$request->input('justification');
      $motif->demandeconge_id=$request->demandeconge_id;

      $motif->save();
     
      return redirect()->back();
      
    }

}
