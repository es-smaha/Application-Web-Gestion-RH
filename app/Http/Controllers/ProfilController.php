<?php

namespace App\Http\Controllers;
use App\User;
use App\Service;
use  App\Reclamation;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $id=Auth()->user()->id;
        $user=User::find($id);
        $service=Service::all();
        return view("agent.prophile",['$user'=>$user,'service'=>$service]);
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
       $rec= new Reclamation();
       $rec->titre=$request->input('titre');
       $rec->description=$request->input('description');
       $rec->user_id=Auth()->user()->id;
        $rec->save();
       return redirect('reclamation')->with('success', 'bien deposer');
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
        $this->validate($request,[
          
            'image'=>'image|nullable|max:1999',
  
         ]);
         // handla file upload
        if($request->hasFile('image')){
            //get fn with ext
           $FilenameWithExt=$request->file('image')->getClientOriginalName();

           //gwt just filename
           $filename=pathinfo($FilenameWithExt,PATHINFO_FILENAME);
           //gET JUST EXT
           $extension=$request->file('image')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$filename.'_'.time().'.'.$extension;
           //upload image
           $path=$request->file('image')->storeAs('public\cover_images',  $fileNameToStore);
       // on utise ce commande pour cree ce dossier :php artisan storage:link

         }else{

           $fileNameToStore='noimage.jpeg';
         }
         $user = User::find($id);
        $user->image=$fileNameToStore;
         $user->save();
         return "123";
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
