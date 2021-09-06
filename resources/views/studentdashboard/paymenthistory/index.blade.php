@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/paymenthistory.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')


    <style>
        .modalfix {
            min-height: 20px im !important;
            padding: 19px im !important;
            margin-bottom: 20px im !important;
            background-color: #243439 im !important;
            border: 1px solid #243439 im !important;
            border-radius: 4px im !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%) im !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%) im !important;
            width: 83% im !important;
        }

    </style>





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
                                        @foreach ($payment_details as $pd)

                                            <tr class="mycolareadata">
                                                <td>HRS{{ $pd->registerCourse->name  ?? ''}}</td>
                                                <td>HRS {{ $pd->registerCourse->id }}</td>
                                                <td>USD {{ $pd->registerCourse->course->price }}</td>
                                                <td>{{ $pd->card_type }}</td>
                                                <td>{{ $pd->created_at }}</td>

                                                <td>

                                                    <!-- <a href="">
                                                        <span class="badge bg-info" name="msgmodal"
                                                            data-url="{!! asset('index.php/admin/contact/full_desc/') . '/' . $pd->id !!}">
                                                            View Receipt</span>
                                                    </a> -->
                                                    <span class="ucc detail_{!! $pd->id !!}" data-toggle="modal"
                                                        data-target=".detail_{!! $pd->id !!}">View Receipt</span>
                                                    {{-- <span class="badge bg-info" name="msgmodal"
                                                        data-url="{!! asset('student/getpaymentdetail?payment_id=') . $pd->id !!}">
                                                        View Receipt</span> --}}
                                                    @include('studentdashboard.paymenthistory.partial.recipt_modal',['payment_detail'=>$pd])
                                                </td>
                                            </tr>
                                        @endforeach

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
