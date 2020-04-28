<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandedocument;
use App\User;
use App\Typedocument;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typedoc=Typedocument::All();
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $demandedocuments=Demandedocument::All();
        return view('agent.demandeDoc.create', ['typedoc'=>$typedoc, 'demandedocuments'=> $demandedocuments]);
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
        $demandedocuments=new Demandedocument();
        $demandedocuments->typedocument_id=$request->typedocument_id;
      

        $demandedocuments->user_id=auth()->user()->id;
        
        $demandedocuments->save();
        return redirect('doc')->with('success','Votre demande est envoyée');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $demandedocuments=Demandedocument::find($id);
        $demandedocuments->delete($id);
        return redirect('doc')->with('success','votre demane a ete bien supprime');
    }
}
