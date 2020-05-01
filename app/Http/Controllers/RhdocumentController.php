<?php

namespace App\Http\Controllers;
use App\Demandedocument;
use App\User;
use App\Event;
use App\Demandeconge;
use App\Typedocument;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

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
            
             return redirect()->back()->with('success','le document est pret');
      
         
    }
    public function page()
    {
        $events=Event::all();
    
        
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
             if($roww->avis==1){
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
             return view('resprh.calendare.calendar',compact('events','conges','calendar'));
         
    }


}
