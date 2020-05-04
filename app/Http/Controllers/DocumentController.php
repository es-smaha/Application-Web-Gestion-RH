<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandedocument;
use App\User;
use App\Typedocument;
use Carbon\Carbon;
use App\Db ;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Validerdocument;
use Illuminate\Support\Facades\Notification;

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
        $demandedocuments = new Demandedocument();
        
        $typeDocId = $request->typedocument_id;
        $typedoc = Typedocument::find($typeDocId);
        $periode =$typedoc->duree;
        
        $user = auth()->user()->id;
        $max = $typedoc->max;
       
        // appel sur la base 
        // $type doc ? month ola year and which is that 
        // if month \DateTime('today') month
        // select demande doc where id user . typde doc . and createdAT in type doc month ola year 
       
        $date = carbon::now() ;
             if($typedoc->periode=='y'&& date("y", strtotime($date)) == date("y", strtotime($periode))){
                $demandes = Demandedocument::where(["user_id"=>$user, "typedocument_id"=>$typeDocId])->count();
                if($demandes < $max  ){

                    $demandedocuments->datetraitement = new \DateTime('today');
                    $demandedocuments->typedocument_id=$request->typedocument_id;
                    $demandedocuments->user_id=auth()->user()->id;
                    $demandedocuments->save();
                    $us=User::where('usertype',"=",2)->get();
                   
                    Notification::send($us, new Validerdocument(Auth()->user()));
                    return redirect('doc');
               
                }
            
            else
            {
         
                return redirect('doc')->with('fail','vous avez depassez la limite de vos demandes ');
            }  
        }
            if($typedoc->periode=='m'  && date("m", strtotime($date)) == date("m", strtotime($periode)) ){
                $demandes = Demandedocument::where(["user_id"=>$user, "typedocument_id"=>$typeDocId])->count();
                if($demandes < $max){

                    $demandedocuments->datetraitement = new \DateTime('today');
                    $demandedocuments->typedocument_id=$request->typedocument_id;
                    $demandedocuments->user_id=auth()->user()->id;
                    $demandedocuments->save();
                    $us=User::where('usertype',"=",2)->get();
                    Notification::send($us, new validerdocument(Auth()->user()));
                    return redirect('doc');
                }
            
            else
            {
         
                return redirect('doc')->with('fail','vous avez depassez la limite de vos demandes ');
            }  
        }
            
    
       
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
