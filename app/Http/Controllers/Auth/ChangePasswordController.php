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
                     $user->first_time_login = true;
                     //Auth::user()->first_time_login = 1; 
                     
                      $user->save();
                      Auth::logout();
                      
                      return redirect('/');
         }else{
            
                 return view('change');
         }


    }

    public function indexAgent(){
       
        return view('agent.change');
        
    }

    public function passwordupdateAgent(Request $request){
        $validate=$request->validate([
            'oldpassword' => 'required',
     
            'password' => 'required|min:8|required-with:password-confirmation' 
         ]);
        $user=User::find(Auth::user()->id);
        if($user){
            if(hash::check($request->oldpassword, $user->password && $validate)){
                $user->password=hash::make($request->password);
                $user->save();
                $request->session()->flash('success','compatibles');
            return redirect()->back();
               
    }else{
            $request->session()->flash('error','incompatibles');
            return redirect()->back();
    }} }

      
         
         public function indexrh(){
       
            return view('resprh.change');
            
        }
         public function passwordupdaterh(Request $request){
     
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
                
                     return view('resprh.change');
             }
    
    
        }
    
        public function indexresppaie(){
       
            return view('resppaie.change');
            
        }
    public function passwordupdateresppaie(Request $request){
     
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
            
                 return view('resppaie.change');
         }


    }
    public function indexchefh(){
       
        return view('chefh.change');
        
    }
    public function passwordupdatechefh(Request $request){
     
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
            
                 return view('chefh.change');
         }


    }
    

}
