<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id , Request $request)
    {   
        if($id=="payments.makePayment"){
            // test 01 :
            $paymentController = new PaymentController();
            $members=$paymentController->index(); 
            return view('payments.makePayment', compact('members'));
        }
        if($id=="payments.showPayments"){
            $paymentController = new PaymentController();
            $payments=$paymentController->showPayments();
            
                // $payments= Payment::all(); //get all payments 
                // or
                // $payments = Payment::with('member')->get();
                //get with model (member) and in blade (<td>{{$payment->member->name}}</td>)

                // dd($payments);
            return view('payments.showPayments', compact('payments')); 
        }
        if($id=="searchFilter"){
                $search = $request->search;
                $paymentController = new PaymentController();
                $payments=$paymentController->search($request);
                    
                return view('payments.showPayments',compact('payments','search'));
            
        }
        if($id=="videosControl"){
            $VideosController = new VideosController();
            $sections= $VideosController->index();
            // dd($sections);
            return view('videos.videosControl', compact('sections'));

        }
        if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }

     //   return view($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
