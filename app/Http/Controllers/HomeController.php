<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        if(Auth::user()->first_time_login==false){
            $first_time_login = true;
            Auth::user()->first_time_login = 1; 
            Auth::user()->save();
            return view('change');

        }else if(Auth::user()->first_time_login==true && Auth::user()->usertype=='1' ){
        return view('dashboard');

        }else if(Auth::user()->first_time_login==true && Auth::user()->usertype=='2' ){
            return view('dashboard2');
    
            }else if(Auth::user()->first_time_login==true && Auth::user()->usertype=='3' ){
                return view('dashboard3');
        
                }else if(Auth::user()->first_time_login==true && Auth::user()->usertype=='0' ){
                    return view('home');
            
                    }else{
                        return view('404error');
                    }
    }
}
