<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFaceBook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleGoogleCallBack(){
        try{
            $user     = Socialite::driver('google')->user();
            $findUser = User::where('social_id',$user->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect('/view/member');
            }else{
                // hash password: 
                $hashedPassword =Hash::make($user->password);
                //create new 'user'
                $newUser=User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => $hashedPassword,
                    'registration_type'=>'user',
                    'social_id'=>$user->id,
                    'social_type'=>'google',
                ]);
                Auth::login($newUser);
                // return response()->json($newUser);
                return redirect('/view/member');
            }
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
