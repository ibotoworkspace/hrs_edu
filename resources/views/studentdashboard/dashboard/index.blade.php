@extends('studentdashboard.layouts.index')

<?php
$student_common = session()->get('student_common');
$student = $student_common->student;
$courses = $student_common->courses;
?>
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')








    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">

        <section>

            <div class="serchsite">
                <div class="container-fluid">
                    {{-- <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div> --}}

                    @if ($message = Session::get('sussess'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="row infobox">
                        <div class="col-sm-6  col-xs-6 uuuu">
                            <div class="infoboxdata row">
                                <div class="infoboxdatatext col-sm-8  col-xs-8 ">
                                    <h4 style="text-transform: uppercase;">{{ $student->name }}</h4>
                                    <h3>Welcome to HRS Academy</h3>
                                </div>
                                <div class="infoboxdatatextimg col-sm-4 col-xs-6">
                                    <img src="{{ asset('images/image-15.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6  col-xs-6 ">
                            <div class="infoboxdata row">
                                <div class="infoboxdatatext  col-sm-8 col-md-8 col-xs-8">
                                    <h4>Ticket</h4>

                                    <h3 class="cardText">Need help? Check out our help desk</h3>

                                       <a href="{{ asset('student/viewticket') }}"><button type="button"
                                        class="btn btn-primary desk hideBtn">HELP DESK</button></a>
                                </div>
                                <div class="infoboxdatatextimg col-sm-4 col-xs-6">
                                    <img src="{{ asset('images/image-16.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>

                {{--  --}}
                <div style="background-color: #bfb28e;padding: 10px">
                <table class="table table-bordered">
                    <thead style="background-color: #243439; color: #fff">
                      <tr>
                        <th class="smTh">Course Code</th>
                        <th class="smTh">Course Title</th>
                        <th class="smTh">Date of Registration</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $key => $r_course)
                        <tr class="mycolareadata" style="color: #fff">
                            <td>HRS0{{ $r_course->id }}
                                @if ($r_course->badge_status == 'accepted')
                                    <span><img src="{{ $r_course->course->badge }}" width="25"
                                            height="30"></span>
                                @endif
                            </td>
                            <td>{{ $r_course->name }}</td>
                            <td>{{ $r_course->created_at->format('j-m-Y') }}</td>
                            <?php
                            $register_course_id = Crypt::encrypt($r_course->id);
                            $course_id = Crypt::encrypt($r_course->course->id);
                            ?>
                            @if (!$r_course->is_paid)

                                <form action="{{ url('/student/makepayment') }}" method="post">
                                    {{ csrf_field() }}
                                    <td>
                                        <input name="course_id" value="{{ $register_course_id }}"
                                            hidden>
                                        <button type="submit" class="btn btn-primary smBtn payment">
                                            Make Payment</button>
                                    </td>
                                </form>
                            @else
                                <td>
                                    <button type="button" class="btn btn-primary  mypayment"
                                        onclick="window.location.href='{{ asset('student/course/detail?course_id=' . $course_id) }}';">View
                                        Course</button>
                                </td>

                                @if ($r_course->test)
                                <td>
                                    <button type="button " class="btn btn-primary smBtn payment"
                                        onclick="window.location.href='{{ asset('student/course/detail?course_id=' . $course_id) }}';">Start test</button>
                                </td>
                                @endif


                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>

                {{--  --}}

                    <div class="row recentbox">
                        <div class="col-sm-12">
                            <div class="recentboxdata">
                                <h3 class="footerH">RECENT SUPPORT REQUESTS</h3>
                                <h4 class="footerP">It appears you do not have any support request with us yet.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>





@endsection
