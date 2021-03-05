@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/submitrequest.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')





    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>

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

                    <div class="row subrow">
                        <div class="col-sm-12">
                            <h3>HRS {{ $course_detail->title }}</h3>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12">
                            <a href="{{ asset($course_detail->download_pdf) }}" style="margin-bottom: 10px;" class="btn btn-primary down">
                                <i class="fa fa-long-arrow-down arrow" style="margin-right: 10px;" aria-hidden="true">

                                </i>Download</a><br>
                            </a>
                        </div>
                    </div>
                    <div class="row courseside">
                        <div class="col-sm-12">
                            <div class="coursesidedata">
                                <table class="table mytables">
                                    <thead class="coursesidehead">
                                        <tr>
                                            <th>Course No</th>
                                            <th>Title</th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mycolarea">
                                        @foreach ($course_detail->chapters as $key => $chap)
                                            <tr class="mycolareadata">
                                                <td>HRS-{{ $chap->id }}</td>
                                                <td>{{ $chap->title }}</td>
                                                <td>
                                                    <a href="{{asset('student/read/chapter?chap_id=' . $chap->id )}}" target="_blank">
                                                        <span class="badge badge-success">Read </span>
                                                    </a>
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
