@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/submitrequest.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')





    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                SUBMIT A REQUEST
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

                    <div class="row subrow">
                        <div class="col-sm-12">
                            <h3>My Courses</h3>
                        </div>
                    </div>
                    <div class="alert alert-success alert-block success-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="suc-msg">{{ $message ?? '' }}</strong>
                    </div>
                    <div class="row courseside">
                        <div class="col-sm-12">
                            <a class="btn-primary" href="{{ asset('student/generaldiscussion') }}"><button type="button"
                                    class="btn btn-info">General Discussion</button></a>
                        </div>
                        <div class="col-sm-12">
                            <div class="coursesidedata">

                                <div class="coursesidedata">

                                    <table class="table mytables">
                                        <thead class="coursesidehead">
                                            <tr>
                                                <th>Course No</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody class="mycolarea">
                                            @foreach ($register_courses as $key => $r_course)
                                                <tr class="mycolareadata">
                                                    <td class="tdcenter">HRS-{{ $r_course->id }}</td>
                                                    <td class="tdcenter">{{ $r_course->course->title }}</td>
                                                    <td class="tdcenter">
                                                        <img width="100px" src="{!! $r_course->course->avatar !!}"
                                                            class="show-product-img imgshow">

                                                    </td class="tdcenter">
                                                    <?php
                                                    $test = $r_course->course->test;
                                                    $current_time = Carbon\Carbon::now()->timestamp;
                                                    $start_time = $test->test_assign->start_date_time ?? 0;
                                                    $end_time = $test->test_assign->end_date_time ?? 0;
                                                    $start_test = false;
                                                    if ($current_time > $start_time && $current_time < $end_time) {
                                                        $start_test=true; } $course_id=Crypt::encrypt($r_course->
                                                        course->id);
                                                        $group_id = $r_course->course->group->id ?? null;
                                                        ?>
                                                        <td class="tdcenter">
                                                            <a href="{{ asset('student/course/detail?course_id=' . $course_id) }}"
                                                                target="_blank">
                                                                <span class="btn btn-primary">View</span>
                                                            </a>
                                                            @if ($group_id)
                                                                <a href="{{ asset('student/course/discussion/' . $group_id) }}"
                                                                    target="_blank">
                                                                    <span class="btn btn-primary">Discussion</span>
                                                                </a>
                                                            @endif

                                                            @if ($r_course->course->group)
                                                                <?php
                                                                $current_time = Carbon\Carbon::now()->timestamp;
                                                                $end_date = $r_course->course->group->end_date ?? 0;
                                                                ?>
                                                                @if ($end_date < $current_time) <button
                                                                        onclick="certificate_requestFun({{ $r_course->id }});"
                                                                        class="badge"> Request For
                                                                        Certificate</button>
                                                                    <button type="button"
                                                                        onclick="badge_requestFun({{ $r_course->id }});"
                                                                        class="badge">Request For Badge</button>
                                                                    <button type="button"
                                                                        onclick="voucher_requestFun({{ $r_course->id }});"
                                                                        class="badge">Request For Voucher</button>
                                                                @endif

                                                            @endif
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
            </div>
        </section>

    </div>

    <script>
        function certificate_requestFun(course_reg_id) {

            let _token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ asset('student/certificate_req') }}",
                type: "POST",
                data: {
                    course_reg_id: course_reg_id,
                    _token: _token
                },
                success: function(response) {
                    console.log('response !!!!!!!!', response);
                    if (response.status == 'true') {
                        $('.success-modal').css("display", "block")
                        $('#suc-msg').html(response.value)
                    }
                }
            });

        }

        function badge_requestFun(course_reg_id) {

            let _token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ asset('student/badge_req') }}",
                type: "POST",
                data: {
                    course_reg_id: course_reg_id,
                    _token: _token
                },
                success: function(response) {
                    console.log('response !!!!!!!!', response);
                    if (response.status == 'true') {
                        $('.success-modal').css("display", "block")
                        $('#suc-msg').html(response.value)
                    }
                }
            });

        }

        function voucher_requestFun(course_reg_id) {

            let _token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ asset('student/voucher_req') }}",
                type: "POST",
                data: {
                    course_reg_id: course_reg_id,
                    _token: _token
                },
                success: function(response) {
                    console.log('response !!!!!!!!', response);
                    if (response.status == 'true') {
                        $('.success-modal').css("display", "block")
                        $('#suc-msg').html(response.value)
                    }
                }
            });

        }

    </script>

@endsection
