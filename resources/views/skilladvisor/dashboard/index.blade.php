@extends('skilladvisor.layouts.index')

<?php
$skilladvisor_common = session()->get('skilladvisor_common');
$skilladvisor = $skilladvisor_common->skilladvisor;
?>
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/lecturerdashboard.css') }}" rel="stylesheet">



@section('default')

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">

        <section>
            <title>
                DASHBOARD
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

                    <div class="row infobox">
                        <div class="col-sm-6">
                            <div class="infoboxdata row">
                                <div class="infoboxdatatext col-sm-8">
                                    <h4 style="text-transform: uppercase;">{{ $skilladvisor->name }}</h4>
                                    <h3>Welcome to HRS Academy</h3>
                                </div>
                                <div class="infoboxdatatextimg col-sm-4">
                                    <img src="{{ asset('images/image-15.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="infoboxdata row">
                                <div class="infoboxdatatext col-sm-8">
                                    <h4>HELP GUIDE</h4>
                                    <h3>Need help? Check out our help desk</h3>
                                    <button type="button" class="btn btn-primary desk">HELP DESK</button>
                                </div>
                                <div class="infoboxdatatextimg col-sm-4">
                                    <img src="{{ asset('images/image-16.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row courseside">
                        <div class="col-sm-12">
                            <div class="coursesidedata">
                                <h3>Registered Students</h3>
                                <table class="table mytables">
                                    <thead class="coursesidehead">
                                        <tr>
                                            <th>S.NO </th>
                                            <th>User Name</th>
                                            <th>USer Email</th>
                                            <th>Registartion Date </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mycolarea">
                                        @foreach ($users as $key => $u)


                                            <tr class="mycolareadata">
                                                <td>HRS0{{ $key + 1 }}
                                                </td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>{{  $u->created_at }}</td>
                                                {{-- <?php
                                                $register_course_id = Crypt::encrypt($r_course->id);
                                                $course_id = Crypt::encrypt($r_course->course->id);
                                                ?> --}}
                                                {{-- @if (!$r_course->is_paid)

                                                    <form action="{{ url('/student/makepayment') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <td>
                                                            <input name="course_id" value="{{ $register_course_id }}"
                                                                hidden>
                                                            <button type="submit" class="btn btn-primary payment">
                                                                Make Payment</button>
                                                        </td>
                                                    </form>
                                                @else
                                                    <td>
                                                        <button type="button" class="btn btn-primary payment"
                                                            onclick="window.location.href='{{ asset('student/course/detail?course_id=' . $course_id) }}';">View
                                                            Course</button>
                                                    </td>

                                                @endif --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row recentbox">
                        <div class="col-sm-12">
                            <div class="recentboxdata">
                                <h3>RECENT SUPPORT REQUESTS</h3>
                                <h4>It appears you do not have any support request with us yet.</h4>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

    </div>





@endsection
