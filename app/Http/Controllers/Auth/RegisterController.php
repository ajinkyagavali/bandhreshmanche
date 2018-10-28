<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
protected $redirectTo = '/index';

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
        'profileby'=>'required|string|max:255',
        'name' => 'required|string|max:255',
        'mname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'mobileno'=>'required|string|max:255',
        'gender'=>'required|string|max:255',
        'marital_status'=>'required|string|max:255',
        'subcaste'=>'required|string|max:255',
        'mother_tongue'=>'required|string|max:255',
        'country_living'=>'required|string|max:255',
        'reg_date'=>'required|string|max:255',
        'adharcardno'=>'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
          'terms' => 'required|string',
         
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
    return User::create(  [
        'reg_id'=>'M'.rand(20000,99999),
        'profileby'=>$data['profileby'],
        'name' => $data['name'],
        'mname' => $data['mname'],
        'lname' => $data['lname'],
        'mobileno'=>$data['mobileno'],
        'gender'=>$data['gender'],
        'marital_status'=>$data['marital_status'],
        'subcaste'=>$data['subcaste'],
        'mother_tongue'=>$data['mother_tongue'],
        'country_living'=>$data['country_living'],
        'reg_date'=>$data['reg_date'],
        'adharcardno'=>$data['adharcardno'],
        'email' => $data['email'],         
         'password' => bcrypt($data['password']),
         'terms' => $data['terms'], 
         'isactive' => 1,
         'isdeleted' => 0,
         'ispayment' =>0,  
         'isAccepted' =>0,   
    ]);
}
}
