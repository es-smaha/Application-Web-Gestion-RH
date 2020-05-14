<?php

namespace App\Http\Controllers;
use App\Reclamation; 
use Illuminate\Http\Request;
use App\User;

class reclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth()->user()->id;
        $rec=Reclamation::where('user_id','=',$id)->paginate(1);
        
        $pages = $rec->links();
       
   
        return view("agent.reclamation",['rec'=>$rec,'pages'=>$pages]);
       
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $rec= new Reclamation();
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('reclamation')->with('success', 'bien deposer');}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $rec=  Reclamation::find($id);
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('reclamation')->with('success', 'bien modifié');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $rec=  Reclamation::find($id);
     
        $rec->delete($id);
           
            return redirect('reclamation')->with('fail', 'Votre reclamation a ete supprimer');  
         
    }
}

