<?php

namespace App\Http\Controllers;
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
        return view('Resprh.users.show')->with('user',$user);

    }
    public function create(){

    }
    public function store(){

    }
    public function update(Request $request, $id){
        $user=User::find($id);
        
         $user->name=$request->input('nom');
         $user->prenom=$request->input('prenom');
         $user->adress=$request->input('adress');
         $user->cne=$request->input('cne');
         $user->ko=$request->input('ko');
         $user->poste=$request->input('poste');
         $user->solde=$request->input('solde');
         $user->dateembauche=$request->input('dateembauche');
         $user->tele=$request->input('tele');
         $user->email=$request->input('email');
         $user->usertype=$request->input('usertype');
         
         $user->save();
         return redirect('users/'.$user->id);

    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect('users');

    }
   


}
