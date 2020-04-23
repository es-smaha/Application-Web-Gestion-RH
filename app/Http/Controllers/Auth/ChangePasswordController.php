<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function index(){
        Alert::success('Success Title', 'Success Message');
        return view('change');
        
    }

    public function passwordupdate(Request $request){
     
        $this->validate($request,[
            'oldpassword' => 'required',
     
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           
  
         ]);
         $hashedPass= Auth::user()->password;
         if(hash::check($request->oldpassword,$hashedPass)){
                     $user=User::find(Auth::id());
                     $user->password=hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      
                      return redirect('/');
         }else{
            
                 return view('change');
         }


    }
}
