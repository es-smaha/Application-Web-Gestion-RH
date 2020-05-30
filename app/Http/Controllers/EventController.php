<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Demandeconge;
use App\Service;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            }}
       
          
           
        }
        $calendar=\Calendar::addEvents($event);
        return view('calendar.eventpage',compact('events','conges','calendar'));  
        
    }
    public function calagent()
    {
       
        $id=auth()->user()->id;
        $conges=Demandeconge::where('user_id','=',$id)->get();
     
        if(count($conges)>0) {
        foreach($conges as $roww ){
            $conge=[];
            if($roww->avis==1 && $roww->user_id==$id){
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
            }}
       
            $calendar=\Calendar::addEvents($event);
            return view('agent.demandes.calendar',compact('conges','calendar'));
        }
        return view('agent.demandes.calendar',compact('conges'));
          
        
    }  
            
    public function cal()
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
      
       
        
        foreach($conges as $roww){
            if(count($conges)>0) {
            $conge=[];
            if($roww->avis==1  ){
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
            }}
       
          
           
        }
        $calendar=\Calendar::addEvents($event);
        return view('resprh.calendare.calendar',compact('events','conges','calendar'));  
        
    }    
        
    
    public function cal2()
    {
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
            }}
       
          
           
        }
        $calendar=\Calendar::addEvents($event);
        return view('resppaie.calendar',compact('events','conges','calendar'));  
        
    }    
        public function calendarajax(Request $request){

            
      $ser=$request->cat_id;
      $services=Service::where('id','=',$ser);
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
       
 
      
        foreach($conges as $roww){
            if(count($conges)>0) {
            $conge=[];
            if($roww->avis==0 && $roww->decision==false && $roww->user->service_id==$ser ){
                
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
            }elseif($roww->avis==1 && $roww->decision==false && $roww->user->service_id==$ser ){
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
            }elseif($roww->avis==1  && $roww->decision==true && $roww->user->service_id==$ser ){

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
    
        }
       
          
           
        }
        $calendar=\Calendar::addEvents($event);
      return view('resppaie.calendarajax',compact('events','conges','calendar')) ;

        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function display()
    {

        return view('calendar.addevent');
    }

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title'=>'required',
        //     'color='=>'required',
        //     'start_date'=>'required',
        //     'end_date'=>'required',
        // ]);
        $events=new Event;
        $events->title=$request->input('title');
        $events->color=$request->input('color');
        $events->start_date=$request->input('start_date');
        $events->end_date=$request->input('end_date');
        $events->save();
        return redirect('events')->with('success','Events Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events =Event::all();
        $conges=Demandeconge::all();
        return view('calendar.editevent',['events'=>$events ,'conges'=>$conges]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events =Event::find($id);
        return view('calendar.editevent',compact('events','id'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $events=Event::find($id);
        $events->title=$request->input('title');
        $events->color=$request->input('color');
        $events->start_date=$request->input('start_date');
        $events->end_date=$request->input('end_date');
        $events->save();
        
        return redirect('events')->with('success','l evenements est modifie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events= Event::findOrfail($id);
        
        $events->delete();
      
        return redirect('events')->with('success','l evenement a ete bien supprime');
    }
}
