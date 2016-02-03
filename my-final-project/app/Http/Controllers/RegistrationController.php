<?php 

namespace App\Http\Controllers;

use App\User;
use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
 
use Session;
//use flash;

//use Illuminate\Session\Store\flash;

class RegistrationController extends Controller
{
    /**
     * Create a new registration instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the register page.
     *
     * @return \Response
     */
    public function register()
    {
        return view('auth.login');
    }

    /**
     * Perform the registration.
     *
     * @param  Request   $request
     * @param  AppMailer $mailer
     * @return \Redirect
     */

    public function postRegister(Request $request, AppMailer $mailer)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
             
        ]);

        //$user = User::create($request->all());
        
        /*$user_data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'token' => 'abc'//$confirmation_code
        ];

        print_r($user_data);
        die();*/



        $confirmation_code = str_random(30);

        /*$user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'token' => 'abc'//$confirmation_code
        ]);*/
        
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->token = $confirmation_code;

        $user->save();

        $user_data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'token' => $confirmation_code
        ];
        

        $mailer->sendEmailConfirmationTo($user_data);

       // Session::flash('Please confirm your email address.');
      //  flash('Please confirm your email address.');
        Session::put('success', 'Please confirm your email address. ');

        //return redirect()->back();                        
        return redirect('/pages/confirmMail');
    }

    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
    public function confirmEmail($token)
    {   

        //User::whereToken($token)->firstOrFail()->confirmEmail();

        $user = new User();
        $user->where('token', $token )->update( ['verified'=>1] );

       // Session::flash('You are now confirmed. Please login.');
        //flash('You are now confirmed. Please login.');

        Session::put('success', 'You are now confirmed. Please login. ');


        return redirect('auth/login');
        //return redirect('/pages/confirmMail');
    }
}
