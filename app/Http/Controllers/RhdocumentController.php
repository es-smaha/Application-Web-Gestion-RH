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
    public function pret(){

        $demandedocument=Demandedocument::all();
        
        $demandedocuments=$demandedocument->where('etat',true);
        
        return view('resprh.document.documentpret', ['demandedocuments'=> $demandedocuments,'demandedocument'=> $demandedocument]);
    }
   
    public function valider($id)
    {
        $demandedocuments=Demandedocument::find($id);
            
               $demandedocuments->etat=1;
               $demandedocuments->save();
            
             return redirect('document-pret')->with('success','le document est pret');
      
         
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
    public function pdf(Request $request){
        $id=$request->demandedoc_id;
        $doc=Demandedocument::find($id);
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
        if($doc->pdf==0){
           $doc->pdf=1;
           $doc->recu=$fileNameToStore;
           $doc->save();
         
        }
         return redirect()->back();
  

    }


}
