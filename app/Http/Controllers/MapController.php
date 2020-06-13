<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Map;
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m=Map::All();
        if(Auth::user()->usertype==2){
            return view("resprh.map",['m'=>$m]);
            }else if(Auth::user()->usertype==1){
                return view('chefrh.planning.map',['ab'=>$ab]);
            }else if(Auth::user()->usertype==3){
                return view('resprh.map',['ab'=>$ab]);
            
        }else if(Auth::user()->usertype==0){
            return view('agent.map',['ab'=>$ab]);
        }
      
      
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
       
        $doc=new Map();
        $this->validate($request,[
        
           'recu'=>'nullable|max:1999|mimes:doc,pdf,,png,jpg',
    
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
       
           $doc->map=$fileNameToStore;
           $doc->save();
         
        
         return redirect()->back();
  

    

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
