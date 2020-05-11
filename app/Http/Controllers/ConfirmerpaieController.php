<?php

namespace App\Http\Controllers;
use App\Demandeconge;
use App\User;
use App\Motif;
use App\Typeconge;
use App\Service;
use Carbon\Carbon;
use App\Planning;
use App\Exports\PlanningExport;
use App\Imports\PlanningImport;
use App\Reclamation;
use Excel;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Http\Request;
class ConfirmerpaieController extends Controller
{
   
   public function index(){
    $type=Typeconge::All();
    $conge=Demandeconge::All()->where('avis', '!=', 0);
    return view('resppaie.confirmerconge', ['type'=>$type,'conge'=>$conge]);
   }
   public function agent(){
      $user=User::all();
      $services=Service::All();
     
      return view('resppaie.agent',['user'=>$user,'services'=>$services]);

   }

   public function service(Request $request){
      
      $ser=$request->cat_id;
      $services=Service::where('id','=',$ser);
      $user=User::where('service_id','=',$ser)->get();
      return view('resppaie.agentservice',['user'=>$user,'servicename'=>$user[0]->service->nom]) ;

    }
   public function planning(){
      $data= Planning::all();
      return view('resppaie.planning', compact('data'));

   }

   public function reclamation(){
      $rec= Reclamation::all();
      return view('resppaie.reclamation', compact('rec'));

   }
   public function show($id){
      $user=User::find($id);
      $services=Service::All();
      return view('resppaie.showagent',['user'=>$user,'services'=>$services]);
   }
   
   
   public function archive1(){
      $type=Typeconge::All();
      $conge=Demandeconge::All();
      return view('resppaie.archiveaccepter', ['type'=>$type,'conge'=>$conge]);
     }
     public function archive2(){
      $type=Typeconge::All();
      $conge=Demandeconge::All() ;
      return view('resppaie.archiverefuser', ['type'=>$type,'conge'=>$conge]);
     }
    
   public function valider( Request $request ,$id){
      $conge=Demandeconge::find($id);
       
      if( $conge->avis!=0){
         $us=$conge->user_id;
         $user=User::find($us);
         $conge->decision=1;
        $conge->save();
        
      }
 
       return redirect('decision-accepter');
         
   }
    public function update( Request $request ){
       $id=$request->input('conge_id');
      $conge=Demandeconge::find($id);
      $us=$conge->user_id;
         $user=User::find($us);
         $user->solde=$request->input('solde');
         $user->jour=$request->input('jour');
         $user->save();
         return redirect()->back();

    }
    
     public function calendar(){

      $conges=Demandeconge::all();
       
      if(count($conges)>0) {
      foreach($conges as $roww){
          $conge=[];
          if($roww->avis==1 && $roww->decision==true){
              $enddate=$roww->datefin."24:00:00";
              $event[]=\Calendar::event(
                  $roww->user->name,
                  true,
                  new \DateTime($roww->datedebut),
                  new \DateTime($roww->datefin),
                  $roww->id,
                  [
                      'color' => 'pink',
                  ]
                  );
          }}}
          
          $calendar=\Calendar::addEvents($event);
          return view('resppaie.calendar',compact('conges','calendar'));
     }
   
}


