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
        return view('Resprh.users.users')->with('user',$user);

    }
    public function show($id){
        $user=User::find($id);
        $services=Service::All();
        return view('Resprh.users.show',['user'=>$user,'services'=>$services]);

    }
    public function create(){
        $service=Service::All();
        return  view('Resprh.users.create')->with('service',$service);

    }
    public function store(Request $request){
       
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'cne' => ['required', 'string', 'max:10'],
            'ko' => ['required', 'string', 'max:10'],
            'poste' => ['required', 'string', 'max:255'],
            'tele' => ['required', 'string', 'max:10','min:10'],
            'dateembauche' => ['required', 'date'],
            'solde' => ['required', 'string', 'max:255'],
            'salaire' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
  
         ]);
         $user= new User();
         $user->name=$request->input('name');
         $user->prenom=$request->input('prenom');

         $user->adress=$request->input('adress');
         $user->cne=$request->input('cne');
         $user->ko=$request->input('ko');
         $user->poste=$request->input('poste');
         $user->tele=$request->input('tele');
         $user->dateembauche=$request->input('dateembauche');
         $user->service_id=$request->service_id;
         $user->solde=$request->input('solde');
         $user->salaire=$request->input('salaire');
         $user->email=$request->input('email');
         $user->password=hash::make($request->input('password'));
         $user->save();

          return redirect('users');

    }
    public function update(Request $request, $id){

        $user=User::find($id);
        $service=Service::All();
         $user->name=$request->input('nom');
         $user->prenom=$request->input('prenom');
         $user->adress=$request->input('adress');
         $user->cne=$request->input('cne');
         $user->ko=$request->input('ko');
         $user->poste=$request->input('poste');
         $user->service_id= $request->service_id;;
         $user->tele=$request->input('tele');
         $user->dateembauche=$request->input('dateembauche');
         $user->service_id=$request->service_id;
         $user->solde=$request->input('solde');
         $user->salaire=$request->input('salaire');
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
