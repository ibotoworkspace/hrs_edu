@extends('studentdashboard.layouts.index')

<link href="{{asset('css/invoice.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')






<link href="css/invoice.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



<section>
            <title>
                INVOICE
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

                    <div class="row invoicrow">
                        <div class="col-sm-12">
                            <h3>INVOICE</h3>
                        </div>
                    </div>

                    <div class="row invoicpointarea">
                        <div class="col-sm-12">
                            <div class="row invoicpoint">
                                <ul>
                                    <li class="unpiadyellow">UNPAID</li>
                                    <li>Payment Reference: HRS595400385</li>
                                    <li>Paid on: 17 December, 2020</li>
                                    <li>Course Title: HRS Network Pro</li>
                                    <li>Course ID: HRS4697</li>
                                    <li>Paid by: Waleed Hussain</li>
                                    <li>Amount Paid: NGN 120,000.00</li>
                                    <li>Payment Method: Credit Card</li>
                                </ul>
                            </div>
                            <div class="row invoicclick">
                                <button type="button" class="btn btn-primary inclick">Invoice Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>




</div>



    @endsection