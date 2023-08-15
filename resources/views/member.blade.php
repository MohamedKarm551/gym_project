@extends('layouts.masterMember')
@section('member')
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <a href="/logout" class="logout btn btn-danger relative">logout</a>
        <section class="parallux-area pt-100 pb-100 relative" data-parallax="scroll"
            data-image-src="{{ asset('img/gym01.png') }}">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <h2>
                            Reasons To <br>
                            <span>Choose</span> Notebook
                        </h2>
                        <p>
                            Here, I focus on a range of items and features that we use in life without giving them a second
                            thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco.
                        </p>
                        <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get
                                Started</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>


        </section>
        <section class="parallux-area pt-100 pb-100  relative" data-parallax="scroll">
            <div class="container">
            <h2>Paid Bills</h2>
            <ul class="exercise-list">
                <!-- List of paid bills will be dynamically added here -->
                @foreach($payments as $payment)
               <li>
               <span class="btn  iteration">{{ $loop->iteration }}</span>
               <span class="paymentPaidAt">{{$payment->paid_at}} : </span> 
               <span class="paymentAmount">{{$payment->amount}}</span> </li>
                @endforeach
            </ul>
            </div>
        </section>
        <section class="parallux-area pt-100 pb-100 relative" data-parallax="scroll"
            data-image-src="{{ asset('img/payment.png') }}">

            <div class="container">
                <h2>Online Payment</h2>
                <p>Please make the payment using the link below:</p>
                <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Make
                        Payment</span><span class="lnr lnr-arrow-right"></span></a>
            </div>


        </section>
        {{-- <div class="section">
            <h2>Paid Bills</h2>
            <ul class="exercise-list">
                <!-- List of paid bills will be dynamically added here -->
                <li>Bill 1</li>
                <li>Bill 2</li>
                <li>Bill 3</li>
            </ul>
        </div> --}}


        <section class="newsletter-area pt-100 pb-100">
            <div class="container">
                <div class="Exercises">
                    <h2>Recorded Exercises</h2>
                    <div class="exercise-list-container p-4">
                        <ul class="list-group exercise-list">
                            <!-- List of recorded exercises will be dynamically added here -->
                            @if(isset($exercises) && $exercises->count() > 0)
                            @foreach ($exercises as $exercise)
                                <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <span class="btn btn-info"> {{ $loop->iteration }} </span>
                                    </div>
                                    <div>
                                        <span class="exercise-name"><strong
                                                style="font-weight: bold;">{{ $exercise->name }}</strong></span>at
                                        <span class="exercise-date">{{ $exercise->created_at }}</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary edit-btn editExercise" >Edit</button>
                                        @method('DELETE')
                                        <button class="btn btn-danger delete-btn" onclick="location.href='{{ url('/deleteExercise/' . $exercise->id) }}'">Delete</button>
                                    </div>
                                </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <form class="exercise-form exercise-list-container p-4" method="POST" action="{{url('/storeExercise')}}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm rounded-left" name="ExerciseName"
                                placeholder="Exercise name">
                            <div class="input-group-append">
                                <button class="btn btn-success btn-sm rounded-right add_exercise" type="submit">Add Exercise</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </section>

        <section class="color-change relative">
            <div class="container">
                <a id="change-color-btn" class="primary-btn d-inline-flex align-items-center mt-10 mb-10"
                    style="
              color: #fff;
          ">
                    <span class="mr-10">Change Color</span><span class="lnr lnr-arrow-right"></span>
                </a>
                <!--  -->

            </div>
        </section>
    </div>
    @extends('layouts.edit_exercise_modal')
    @endsection
