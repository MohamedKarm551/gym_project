<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class members extends Controller
{
    //
    public function view(){

    $userId = session()->get('userId');
    // dd($userId);
    // join code:
    // SELECT exercises.name FROM `exercises` INNER JOIN `users` ON exercises.`user_id` = users.`id`;
        // $exercises = DB::table('exercises')
        // ->join('users', 'users.id', '=', 'exercises.user_id')
        // ->select('exercises.name')
        // ->where('user_id', $userId)
        // ->get();
        // in model :   
        $userId = session()->get('userId');
        $user = User::findOrFail($userId);
        $exercises = $user->exercises()->get();
        //  dd($exercises[1]->name);//the name of exercise
         return view('member', compact('exercises'));
    }
}
