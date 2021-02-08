@extends('studentdashboard.layouts.index')

<link href="{{asset('css/newmake.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



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

                    <div class="row mypayment">
                        <div class="col-sm-12">
                            <div class="ngncode">
                                <p>NGN 120,000</p>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row mypayment">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control paymentformdata" id="formGroupExampleInput"
                                placeholder="Example input">
                        </div>
                    </div>                   

                    <div class="row mypayment">
                        <div class="paymentul">
                            <p class="col-sm-1">Pay Via *</p>
                            <label class="radio-inline" class="col-sm-1"><input type="radio" name="optradio" checked>Option 1</label>
                            <img src="{{asset('images/Icon-37.png')}}" class="img-responsive" class="col-sm-1">     
                        </div>
                    </div>

                    <div class="row mypayment">
                        <div class="pamentclick">
                           <a href="proceedpayment.php"><button type="button" class="btn btn-primary proced">Proceed to Payment</button></a>
                        </div>
                    </div>

                </div>
            </div>
	</section>








</div>



    @endsection