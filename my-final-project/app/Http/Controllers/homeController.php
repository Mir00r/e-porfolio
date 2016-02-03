<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class homeController extends Controller
{
    public function index(){
    	//return view('home');
    	return 'Hurreh !! Controller is Working parfectly';
    }
    public function about(){

    	return view('Home');
    }
    public function profile(){
    	
    	if (Auth::check()){
    		//return view('/pages/profile');

    	   return view('/profile_page/index');
        }
    	return redirect('auth/login');

       // return view('/pages/profile');
    }

    public function confirmMailAddress(){
        return view('/pages/confirmMail');
    }

    public function terms(){

    	return view('pages/Terms');
    }

    public function forget(){

    	return view('pages/forget_pass');
    }

    public function dashboard(){

        return view('/Dashboard/dashboard');
    }

}
 
