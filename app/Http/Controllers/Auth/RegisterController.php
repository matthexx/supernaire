<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\User;
use App\Mail\verifyUser;
use Illuminate\Http\Request;
use App\VerifyUser as verifyEmail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/login';


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
            'referral' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    //create a new method that overrides default register 

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

       // $this->guard()->login($user);
    //this commented to avoid register user being auto logged in

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath())->with('messge', 'Welcome home');
    }   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'referral' => $data['referral'],
            'password' => Hash::make($data['password']),
        ]);

        $verifyUser = verifyEmail::create([
            'user_id' => $user->id,
            'token' => \Str::random(40)
        ]);
            $email = $user->email;
            $subject = "Verify Email";

        return $user;
    }




    // public function VerifyUser($token)
    // {
    //     $verifyUser = verifyEmail::where('token', $token)->first();
    //     if(isset($verifyUser) ){
    //         $user = $verifyUser->user;
    //         if(!$user->verified) {
    //             $verifyUser->user->verified = 1;
    //             $verifyUser->user->save();
    //             $status = "Your e-mail is verified. You can now login.";
    //         }else{
    //             $status = "Your e-mail is already verified. You can now login.";
    //         }
    //     }else{
    //         return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
    //     }

    //     return redirect('/login')->with('status', $status);
    // }


}
