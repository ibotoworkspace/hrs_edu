@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/newmake.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')






    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                MAKE PAYMENT
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div>

                    <div class="row paymentarea">
                        <div class="col-sm-12">
                            <div class="paymentareadata">
                                <h3>MAKE PAYMENT</h3>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{ url('/student/paymentmethood') }}">
                        {{ csrf_field() }}

                        <div class="row mypayment">
                            <div class="col-sm-12">
                                <div class="ngncode">
                                    <p name="ammount">NGN {{ $register_course->course->price }}</p>
                                </div>
                            </div>
                        </div>

                        <input name="course_id" value="{{ $register_course->id }}" hidden>
                        {{-- <div class="form-group row mypayment">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control paymentformdata" id="formGroupExampleInput"
                                    placeholder="Example input">
                            </div>
                        </div> --}}

                        <div class="row mypayment">
                            <div class="paymentul">
                                <p class="col-sm-1">Pay Via *</p>
                                {{-- <label class="radio-inline" class="col-sm-1"><input type="radio" name="optradio">Credit
                                Card</label>
                            <label class="radio-inline" class="col-sm-1"><input type="checkbox"
                                    name="optradio">paypal</label> --}}
                                {{-- <img src="{{ asset('images/Icon-37.png') }}" class="img-responsive" class="col-sm-1"> --}}
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_type" value="stripe" checked>
                                <label class="radio-inline" for="exampleRadios1">
                                    Credit Card
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_type" value="paypal">
                                <label class="radio-inline" for="exampleRadios2">
                                    Pay Pal
                                </label>
                            </div>
                        </div>

                        <div class="row mypayment">
                            <div class="pamentclick">
                                <button type="submit" class="btn btn-primary proced">Proceed to
                                    Payment</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </section>








    </div>



@endsection
