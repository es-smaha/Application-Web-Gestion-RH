<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'adress' => $data['adress'],
            'cne' => $data['cne'],
            'ko' => $data['ko'],
            'poste' => $data['poste'],
            'tele' => $data['tele'],
            'dateembauche' => $data['dateembauche'],
            'solde' => $data['solde'],
            'salaire' => $data['salaire'],
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
