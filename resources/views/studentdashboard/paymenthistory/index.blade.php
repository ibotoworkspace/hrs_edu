@extends('studentdashboard.layouts.index')

<link href="{{asset('css/paymenthistory.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')








<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



 <section>
            <title>
            PAYMENT HISTORY
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

                <div class="row coursesides">
                    <div class="col-sm-12">
                        <div class="coursesidedata">
                            <h3>PAYMENT HISTORY</h3>
                        <table class="table mytables">
                            <thead class="coursesidehead">
                                <tr>
                                    <th>Payment For</th>
                                    <th>Reference No.</th>
                                    <th>Amount Paid</th>
                                    <th>Payment Method</th>
                                    <th>Payment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="mycolarea">
                                <tr class="mycolareadata">
                                    <td>HRS4697 HRS Network Pro</td>
                                    <td>HRS595400385</td>
                                    <td>NGN 120,000</td>
                                    <td>Credit Card</td>
                                    <td>17 Dec, 2020</td>
                                    <td>View Receipt</td>
                                </tr>                                                 
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
</section>




</div>


    @endsection