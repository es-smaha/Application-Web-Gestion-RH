<?php

namespace App\Http\Controllers;
use App\user;
use App\Motif;
use App\Notifications\Validerconge;
use App\Typeconge;
use App\Demandeconge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

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
       $user=User::All();
      return view('chefh.archiverefuse', ['type'=>$type,'conge'=>$conge,'user'=>$user ]);
     }
    
   public function valider($id){
      $conge=Demandeconge::find($id);
      if( $conge->avis == 0){
         $conge->avis = 1;
         $us = $conge->user_id;
         $user =   User::find($us);
          $user->solde = $user->solde - $conge->jour;
         $user->jour = $user->jour + $conge->jour;
         $user->save();
         $conge->save();
      
         
      }
      $us = $conge->user_id;
      $user1 =   User::find($us)->get();
         Notification::send( $user1, new Validerconge(Auth()->user()));
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
   public function store(Request $request){
        $id=$request->conge_id;
        $conge=Demandeconge::find($id);
      if($conge->motif==0){
         $conge->motif=1;
         $conge->motifs=$request->input('justification');
         $conge->save();
       
      }
      
      return redirect()->back();
      
    }



    public function pdf(Request $request){
      $id=$request->conge_id;
      $conge=Demandeconge::find($id);
      $this->validate($request,[
      
         'recu'=>'nullable|max:1999|mimes:doc,pdf,docx,png,jpg',
  
      ]);

      if($request->hasFile('recu')){
         //get fn with ext
        $FilenameWithExt=$request->file('recu')->getClientOriginalName();

        //gwt just filename
        $filename=pathinfo($FilenameWithExt,PATHINFO_FILENAME);
        //gET JUST EXT
        $extension=$request->file('recu')->getClientOriginalExtension();
        //file name to store
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //upload image
        $path=$request->file('recu')->storeAs('public\cover_images',  $fileNameToStore);
    // on utise ce commande pour cree ce dossier :php artisan storage:link

      }
      if($conge->pdf==0){
         $conge->pdf=1;
         $conge->recu=$fileNameToStore;
         $conge->save();
       
      }
       return redirect()->back();

    }
    public function sho($id)
    {
      $conge=Demandeconge::find($id);
      return view('chefh.show')->with('conge',$conge);
    }

}
