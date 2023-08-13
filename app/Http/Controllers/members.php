<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class members extends Controller
{

    public function view()
    {

        // $userId = session()->get('userId');
        // dd($userId);
        // 01-join code:
        // SELECT exercises.name FROM `exercises` INNER JOIN `users` ON exercises.`user_id` = users.`id`;
        // $exercises = DB::table('exercises')
        // ->join('users', 'users.id', '=', 'exercises.user_id')
        // ->select('exercises.name')
        // ->where('user_id', $userId)
        // ->get();
        // 02-in model :   
        // $userId = session()->get('userId'); //error when reload page session expire
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);
        $exercises = $user->exercises()->get();
        //  dd($exercises[1]->name);//the name of exercise
        return view('member', compact('exercises'));
    }
    public function delete($id){
        // dd($id);
        Exercise::where('user_id', auth()->user()->id)
        ->where('id', $id)
        ->delete();
        return redirect()->back();
    }
    public function store(Request $request){
        // dd($request->all());
        $exercises = new Exercise();
        $exercises->name= $request->ExerciseName;
        $exercises->user_id = auth()->user()->id; 
        // dd(auth()->user()->id);
        $exercises->save();
        return redirect()->back();
        }
    public function edit( Request $request, $id){
        // dd($id);
        $exercises = Exercise::find($id);
        $exercises->name= $request->ExerciseName;
        $exercises->user_id = auth()->user()->id; 
        $exercises->save();
        return redirect()->back();

    }
    // public function update(){}
}
