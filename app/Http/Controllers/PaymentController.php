<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PaymentController extends Controller
{
    //
    public function  index()  {
        // $userId = auth()->user()->id;
        // $members = User::all()->where("is_admin", 0);//not admin : is member 
        // //  dd($members);
        // return view('payments.makePayment', compact('members'));//error can't read $members
    }
    public function store(Request $request){
        // dd($request);
        $payment = new Payment();
        $payment->member_id =$request->member_id ;
        $payment->amount=$request->amount ;
        $payment->paid_at =$request->paid_at ;
        $payment->save();
        return redirect()->back();
    }
    public function showPayments(){
        // $payments= Payment::all();
        // // dd($payments);
        // return view('payments.showPayments', compact('payments')); 
    }
}
