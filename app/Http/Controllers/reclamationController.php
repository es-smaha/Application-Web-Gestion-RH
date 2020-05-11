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
        $rec=Reclamation::All();
        $rec=Reclamation::paginate(3);
        $pages = $rec->links();
        $user=User::All();
   
        return view("agent.reclamation",['rec'=>$rec,'user'=>$user,'pages'=>$pages]);
       
    }
    public function indexRh()
    {
        $rec=Reclamation::orderBy('created_at','ASC')->get();
        $user=User::All();
        return view("resprh.reclamation",['rec'=>$rec,'user'=>$user]);
    }
    public function indexH()
    {
        $rec=Reclamation::All();
        $user=User::All();
        return view("chefh.reclamation",['rec'=>$rec,'user'=>$user]);
    }
    public function indexp()
    {
        
        $rec=Reclamation::All();
        $rec=Reclamation::paginate(3);
        $pages = $rec->links();
        $user=User::All();
        return view("resppaie.reclamation",['rec'=>$rec,'user'=>$user,'pages'=>$pages]);
    }
    //Crud Responsable de paie
    public function editer(Request $request, $id)
    {
        $rec=  Reclamation::find($id);
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('/reclamation-agent')->with('success', 'bien deposer');
    }
   
    public function supprimer($id)
    {
        $rec=  Reclamation::find($id);
     
  
        return "123";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajouter(Request $request)
    {
        $rec= new Reclamation();
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('/reclamation-agent')->with('success', 'bien deposer');
    }
// 
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
        $rec=  Reclamation::find($id);
        if(Auth()->User()->id=='0' ){
      
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('reclamation-agent')->with('success', 'bien deposer');
        }else if(Auth()->User()->id=='3'){
      
            $rec->titre=$request->input('titre');
            $rec->description=$request->input('description');
            $rec->user_id=Auth()->user()->id;
             $rec->save();
            return redirect('reclamation')->with('success', 'bien deposer');

        }
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
         if(Auth()->user()->usertype=='0'){
           
            return redirect('reclamation')->with('fail', 'Votre reclamation a ete supprimer');  
         }else if(Auth()->user()->usertype=='3'){
           
            return redirect('reclamation-agent')->with('fail', 'Votre reclamation a ete supprimer'); 
         }
    
    }
}

