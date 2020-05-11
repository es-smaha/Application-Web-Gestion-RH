<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reclamation; 

class ReclamahConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rec=Reclamation::orderBy('id','desc')->paginate(2);
        $pages = $rec->links();
        $user=User::All();
        return view("chefh.reclamation",['rec'=>$rec,'user'=>$user,'pages'=>$pages]);
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
    public function store(Request $request)
    {
        $rec=new Reclamation();
        $rec->titre=$request->input('title');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;

        $rec->save();
        return redirect('reclamationh')->with('success','reclamation ajouté');
    
    }

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
    public function edit($id)
    {
        $rec=Reclamation::find($id);
        return view('chefh.reclamation')->with('rec',$rec);
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
        $rec=  Reclamation::find($id);
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('reclamationh')->with('success', 'bien Modifié');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rec=  Reclamation::find($id);
     
        $rec->delete($id);
       return redirect('reclamationh')->with('fail', 'Votre reclamation a ete supprimer');
   
    }
}
