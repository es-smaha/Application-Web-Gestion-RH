<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeconge;
use App\User;
use App\Demandeconge;
use Illuminate\Support\Facades\Auth;

class DemandecongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $type=Typeconge::All();
        $conge=Demandeconge::All();
        return view('agent.demandes.demandeConge', ['type'=>$type,'conge'=>$conge, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $this->validate($request,[
            'datedebut' => ['required', ],
            'datefin' => ['required', ],
            'jour' => ['required', ],
          
           
  
         ]);
          $conge= new Demandeconge();
          $conge->datedebut=$request->input('datedebut');
          $conge->datefin=$request->input('datefin');
          if($request->input('jour') > auth()->user()->conge ){
              return redirect('conge')->with('fail','solde insufisant');
          }
          $conge->jour=$request->input('jour');
          $conge->raison=$request->input('raison');
          $conge->user_id= auth()->user()->id;
          $conge->typeconge_id=$request->typeconge_id;
            $conge->save();
            return redirect('conge');
      

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
