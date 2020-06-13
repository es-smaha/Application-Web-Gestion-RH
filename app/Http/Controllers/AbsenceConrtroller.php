<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Absence;
use App\User;
class AbsenceConrtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ab=Absence::All();
        if(Auth::user()->usertype==1){
        return view('chefh.absence.index',['ab'=>$ab]);
        }else if(Auth::user()->usertype==2){
            return view('resprh.absence.index',['ab'=>$ab]);
        }
    }
    public function user()
    { 
        $id=Auth()->user()->service_id;
        $user=User::where('service_id','=',$id)->get();
       
        return view('chefh.absence.users',['user'=>$user,'service'=>$user[0]->service->nom]); 
    
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
        $ab=new Absence();
        $ab->date=new \DateTime('today');
        $ab->commentaire=$request->input('commentaire');
        $ab->justification=$request->input('justifie');
        $ab->nomuser=$request->input('nomuser');
        $ab->prenomuser=$request->input('prenomuser');
        $ab->matriculeuser=$request->input('matriculeuser');
        $ab->user_id= auth()->user()->id;
        $ab->save();
        return redirect('/Allusers');

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
        //
    }
}
