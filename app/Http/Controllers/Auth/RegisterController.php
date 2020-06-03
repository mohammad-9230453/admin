<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:11', 'min:11', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required'],
//            recaptchaFieldName() => recaptchaRuleName(),
        ],[
            'phone.unique'=>'این شماره در سرور موجوده ... شماره جدید بزن',
//            'phone.required'=>'phone required',
//            'phone.max'=>'phone max',
//            'phone.min'=>'phone min',
//            'email.required'=>'email required',
//            'email.string'=>'email string',
//            'email.email'=>'email email',
//            'email.max'=>'email max',
//            'email.unique'=>'email unique',
//            'photo.required'=>'photo required',
//            'password.required'=>'pass required',
//            'password.string'=>'pass string',
//            'password.min'=>'pass min',
//            'password.confirmed'=>'pass confirmed',
//            'name.required'=>'name required',
//            'name.string'=>'name string',
//            'name.max'=>'name max 255',
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
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

    }

    public function showRegistrationForm(){
//        if (Auth::check()) {
//            $user = Auth::user();
//            $file = $data->file('photo');
//            $name = time() . $file->getClientOriginalName();
//            $file->move('images/', $name);
//            $user->photo()->Create(['path' => $name]);
//
//        }
        return view('register');
    }
}
