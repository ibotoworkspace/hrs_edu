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

                    <div class="row courseside">
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
                                                    <img width="100px" src="{!! $r_course->course->avatar !!}" class="show-product-img imgshow">

                                                </td class="tdcenter">
                                                <?php 
                                                $course_id = Crypt::encrypt($r_course->course->id);
                                                ?>
                                                <td class="tdcenter"><a href="{{asset('student/course/detail?course_id='.$course_id)}}" target="_blank">
                                                        <span class="badge badge-success">View</span>
                                                    </a></td>

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
