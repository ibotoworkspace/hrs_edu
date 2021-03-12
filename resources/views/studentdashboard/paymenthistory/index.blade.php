@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/paymenthistory.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



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
                                        @foreach ($payment_details as $pd)

                                            <tr class="mycolareadata">
                                                <td>HRS{{$pd->registerCourse->name}}</td>
                                                <td>HRS {{$pd->registerCourse->id}}</td>
                                                <td>USD {{$pd->registerCourse->course->price}}</td>
                                                <td>{{$pd->card_type}}</td>
                                                <td>{{$pd->created_at}}</td>
                                                <td>
                                                    {{-- <a href="#">
                                                    View Receipt</a> --}}
                                                
                                                    <a href="">
                                                        <span class="badge bg-info" name="msgmodal"
                                                        data-url="{!! asset('index.php/admin/contact/full_desc/').'/'.$pd->id !!}"
                                                              >
                                                              View Receipt</span>
                                                  </a>
                                                  <span class="ucc detail_{!!$pd->id!!}" data-toggle="modal"
                                                    data-target=".detail_{!!$pd->id!!}">View Receipt</span>
                                                @include('studentdashboard.paymenthistory.partial.image_modal',['payment_detail','date_index'])
                                                {{-- @include('studentdashboard.paymenthistory.partial.image_modal',) --}}
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
    @include('studentdashboard.paymenthistory.partial.image_modal')


@endsection
