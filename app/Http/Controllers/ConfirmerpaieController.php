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
use App\Event;
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
      return view('resppaie.agentservice',['user'=>$user,'services'=>$services,'servicename'=>$user[0]->service->nom]) ;

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


      $dated=$request->input('datedebut');
      $datef=$request->input('datefin');
      $start_date = strtotime( $dated); 
      $end_date = strtotime($datef);
      $diff = abs( $start_date-$end_date );
      $years = floor($diff / (365*60*60*24)); 
      $months = floor(($diff - $years * 365*60*60*24)   / (30*60*60*24));
      $conges=floor((($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24))+1);

     $conge->datedebut=$request->input('datedebut');
     $conge->datefin=$request->input('datefin');
     $start_date = strtotime( $conge->datedebut); 
     $end_date = strtotime($conge->datefin);
     $diff = abs(  $start_date-$end_date);
     $years = floor($diff / (365*60*60*24)); 
     $months = floor(($diff - $years * 365*60*60*24)   / (30*60*60*24));
     $conges=floor((($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24))+1);
     $conge->jour=$conges;
     
          $us=$conge->user_id;
         $user=User::find($us);
         $user->solde=$request->input('solde');
        $conge->save();
         $user->save();
         return redirect()->back();

    }

    
     public function calendar(){
        $e= new Event();
        $e->title='.';
        $e->color='white';
        $e->start_date='2020-05-30 19:34:27';
        $e->end_date='2020-05-31 19:34:27';
        $e->save();
      $events=Event::all();
      //     $events->insert( [
      //    "title"=>"et",
      //     "color"=>"red",
      //     "start_date"=>"",
      //     "end_date"=>"", 
      //     ] );
      
          
         if(count($events)>0) {
          foreach($events as $row){
              $event=[];
              $enddate=$row->end_date."24:00:00";
              $event[]=\Calendar::event(
                  $row->title,
                  false,
                  new \DateTime($row->start_date),
                  new \DateTime($row->end_date),
                  $row->id,
                  [
                      'color' => $row->color,
                  ]
                  );
              }
          }
      $conges=Demandeconge::all();
       
      if(count($conges)>0) {
      foreach($conges as $roww){
          $conge=[];
          if($roww->avis==0 && $roww->decision==false){
              $enddate=$roww->datefin."24:00:00";
              $event[]=\Calendar::event(
                  $roww->user->name,
                  true,
                  new \DateTime($roww->datedebut),
                  new \DateTime($roww->datefin),
                  $roww->id,
                  [
                      'color' => 'red',
                  ]
                  );
          }else if($roww->avis==1 && $roww->decision==false){
            $enddate=$roww->datefin."24:00:00";
            $event[]=\Calendar::event(
                $roww->user->name,
                true,
                new \DateTime($roww->datedebut),
                new \DateTime($roww->datefin),
                $roww->id,
                [
                    'color' => 'yellow',
                ]
                );
          }
          else if($roww->avis==2 && $roww->decision==false){
            $enddate=$roww->datefin."24:00:00";
            $event[]=\Calendar::event(
                $roww->user->name,
                true,
                new \DateTime($roww->datedebut),
                new \DateTime($roww->datefin),
                $roww->id,
                [
                    'color' => 'yellow',
                ]
                );
          }else if($roww->avis==1 && $roww->decision==true){
            $enddate=$roww->datefin."24:00:00";
            $event[]=\Calendar::event(
                $roww->user->name,
                true,
                new \DateTime($roww->datedebut),
                new \DateTime($roww->datefin),
                $roww->id,
                [
                    'color' => 'green',
                ]
                );
          }
         }
         }
          
          $calendar=\Calendar::addEvents($event);
          return view('resppaie.calendar',compact('conges','event','calendar'));
     }
   
}


