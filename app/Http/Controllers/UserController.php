<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Service;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=User::all();
        $services=Service::All();
       
        return view('Resprh.users.users',['user'=>$user,'services'=>$services]);

    }
    public function show($id){
        $user=User::find($id);
        $services=Service::All();
        return view('Resprh.users.show2',['user'=>$user,'services'=>$services]);

    }
    public function create(){
        $service=Service::All();
        

        return  view('Resprh.users.create')->with('service',$service);

    }
    public function store(Request $request){
        $services=Service::All();
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'kochef' => ['required', 'string', 'max:255'],
            'cne' => ['required', 'string', 'max:10'],
            'ko' => ['required', 'string', 'max:10','unique:users'],
            'poste' => ['required', 'string', 'max:255'],
            'tele' => ['required', 'string', 'max:10','min:10'],
            'dateembauche' => ['required', 'date'],
            'solde' => ['required', 'max:30'],
       
            'email' => ['required', 'string', 'unique:users'],
            'image'=>'image|nullable|max:1999|',
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
           //mimes:doc,pdf,docx,png,jpg
  
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

           $fileNameToStore='noimagee.png';
         }
         $user= new User();
         $user->name=$request->input('name');
         $user->prenom=$request->input('prenom');

         $user->kochef=$request->input('kochef');
         $user->cne=$request->input('cne');
         $user->ko=$request->input('ko');
         $user->poste=$request->input('poste');
         $user->tele=$request->input('tele');
         $user->dateembauche=$request->input('dateembauche');
         $user->service_id=$request->service_id;
         $user->solde=$request->input('solde');
        
         
         $user->email=$request->input('email');
         $user->image=$fileNameToStore;
         $user->password=hash::make($request->input('cne'));
         $user->save();

        return redirect('users')->with('services',$services);

    }
    public function update(Request $request, $id){

        $user=User::find($id);
        $service=Service::All();
        $user->name=$request->input('nom ');
        $user->prenom=$request->input('prenom');
        $user->kochef=$request->input('kochef');
        $user->cne=$request->input('cne');
        $user->ko=$request->input('ko');
        $user->poste=$request->input('poste');
        $user->tele=$request->input('tele');
        $user->dateembauche=$request->input('dateembauche');
        $user->service_id=$request->service_id;
        $user->solde=$request->input('solde');
          $user->email=$request->input('email');
          $user->password=hash::make($request->input('password'));
        $user->save();
         return redirect('users/'.$user->id)->with('service',$service);

    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
    
        return redirect('users');
    }
   


}
