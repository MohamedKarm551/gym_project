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
        $userId = auth()->user()->id;
        $members = User::all()->where("is_admin", 0);//not admin : is member 
        // //  dd($members);
        return $members;
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
        $payments= Payment::paginate(10);//not all : but 10 by 10 
        // dd($payments);
        return $payments;
    }
    public function search(Request $request){
        $search = $request->search;
            $payments =Payment::where(function($query) use ($search){
        
                    $query->where('paid_at','like',"%$search%")
                    ->orWhere('amount','like',"%$search%");
        
                    })
                    ->orWhereHas('member',function($query) use($search){
                        $query->where('name','like',"%$search%");
                    })
                    ->orWhereHas('member',function($query) use ($search){
                        $query->where('email','like',"%$search%");
                    })
                    ->get();
            return $payments;
        }
    }

