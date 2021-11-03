@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/submitrequest.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')




    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                SUBMIT A REQUEST
            </title>
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

                    <div class="row subrow">
                        <div class="col-sm-12">
                            <h3>My Tests</h3>
                        </div>
                    </div>

                    <div class="row courseside">

                        <div class="col-sm-12">
                            <div class="coursesidedata">

                                <div class="coursesidedata">

                                    <table class="table mytables">
                                        <thead class="coursesidehead">
                                            <tr>
                                                <th>Test No</th>
                                                <th>Test Title</th>
                                                <th>Course Title</th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody class="mycolarea">
                                            @foreach ($all_test as $key => $at)
                                                <tr class="mycolareadata">
                                                    <td class="tdcenter">HRS-test 00{!! $at->test->id !!}</td>
                                                    <td class="tdcenter">{!! $at->test->name !!}</td>
                                                    <td class="tdcenter">{!! $at->test->course->title ?? '' !!}</td>
                                                    <?php
                                                    $current_time = Carbon\Carbon::now()->timestamp;
                                                    $start_time = $at->start_date_time ?? 0;
                                                    $end_time = $at->end_date_time ?? 0;
                                                    $start_test = false;
                                                    if ($current_time > $start_time && $current_time < $end_time) {
                                                        $start_test=true; } ?> <td class="tdcenter">
                                                        @if ($start_test)

                                                            @if ($at->test->test_result != null)
                                                                <a href="{{ asset('student/course/test/result?test_result_id=' . $at->test->test_result->id) }}"
                                                                    target="_blank">
                                                                    <span class="btn btn-primary">View result</span>
                                                                </a>
                                                            @else
                                                                <a href="{{ asset('student/course/test?test_id=' . $at->test->id) }}"
                                                                    target="_blank">
                                                                    <span class="btn btn-primary">Start Test</span>
                                                                </a>
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



@endsection
