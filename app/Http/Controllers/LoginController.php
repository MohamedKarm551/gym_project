<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        return view('signin');
    }
    public function loginRequest(Request $request){
        //test the request with database and next 
        $credentials =  $request->only('email', 'password'); //only this from request

        if (Auth::attempt($credentials)) { // test with database 
            return view('index');

    }
        // return redirect("login");
        else {
            echo 'error in Auth::attempt("$credentials")';   
            //   dd($request);   
            return redirect("signin");
            }
            
    }
    public function logout(){
        Auth::logout();
        return redirect("signin");
    }
}
