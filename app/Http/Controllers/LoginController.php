<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('signin');
    }
    public function loginRequest(Request $request){
        //test the request with database and next 
        $credentials =  $request->only('email', 'password'); //only this from request

        if (Auth::attempt($credentials)) { // test with database table users 
            $userId = Auth::user()->id;
            if(Auth::user()->is_admin){
                return view('index');

            }
        //not admin but member ot
            return redirect('/view/member')->with('userId', $userId); 
            // return redirect('/view/member',['userId'=>$userId]); 
        }
        // return redirect("login");
        elseif (true) {
            // Test the request with trainers table
            // $credentials = $request->only('email', 'password');
            $trainer = Trainer::where('email', $credentials['email'])->first();
            // dd($trainer);
            if ($trainer && Hash::check($credentials['password'], $trainer->password)) {
                // Authentication successful
                return view('trainers',['trainer' => $trainer]);
                }
        else {
            echo 'error in Auth::attempt("$credentials")';   
            //   dd($request);   
            return redirect("signin");
            }
            
    }
    }
    public function logout(){
        Auth::logout();
        return redirect("signin");
    }
}
