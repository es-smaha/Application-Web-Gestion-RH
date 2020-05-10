<?php

namespace App\Http\Controllers;
use App\Service;
use App\Typeconge;
use App\Reclamation; 
use App\Typedocument;
use App\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index(){
        $typeconges=Typeconge::all();
         $services=Service::all();
         $typedocuments=Typedocument::all();

        return view('resprh.dashboard',['typeconges'=>$typeconges,'services'=>$services,'typedocuments'=>$typedocuments]);

    }
    public function admini(){
      $typeconges=Typeconge::all();
       $services=Service::all();
       $typedocuments=Typedocument::all();

      return view('resprh.rerh.admini',['typeconges'=>$typeconges,'services'=>$services,'typedocuments'=>$typedocuments]);

  }
    public function profil(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        $service=Service::all();
        return view("resprh.prophile",['$user'=>$user,'service'=>$service]);
    }
    public function update(Request $request)
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
         $id=Auth()->User()->id;
         $user = User::find($id);
        $user->image=$fileNameToStore;
         $user->save();
         return redirect('Myprophil');
    }
  public function reclamation(){
    $rec=Reclamation::All();
    $user=User::All();
    return view("resprh.reclamation",['rec'=>$rec,'user'=>$user]);
  }
  public function store(Request $request)
{  $rec= new Reclamation();
    $rec->titre=$request->input('titre');
    $rec->description=$request->input('description');
    $rec->user_id=Auth()->user()->id;
     $rec->save();
    return redirect('Reclamationn')->with('success', 'bien deposer');}

  public function edit(Request $request, $id)
    {
        $rec=  Reclamation::find($id);
        $rec->titre=$request->input('titre');
        $rec->description=$request->input('description');
        $rec->user_id=Auth()->user()->id;
         $rec->save();
        return redirect('Reclamationn')->with('success', 'bien deposer');
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
          return redirect('Reclamationn')->with('fail', 'Votre reclamation a ete supprimer');
    }
}
