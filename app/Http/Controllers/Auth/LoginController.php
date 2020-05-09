<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $maxAttempts = 3;
    protected $decayMinutes = 5000;

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';
     protected $first_time_login = false;
    protected function redirectTo(){

      
        if (Auth::User()->usertype=='1'){
            return 'dashboard';
        }else if(Auth::User()->usertype=='2'){

             return 'dashboard2';
        }else if(Auth::User()->usertype=='3') {
                return 'dashboard3';
        }else if(Auth::User()->usertype=='0') {
            return 'home';
          }else{
    
        return  '404error';
        }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'ko';
    }

}
