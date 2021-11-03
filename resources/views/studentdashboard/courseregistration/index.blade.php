@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/courseregistration.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')


    {{-- {{ dd($courses)}} --}}

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">



        <section>
            <title>
                REGISTRATION
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    <div class="row serchbox">
                        <form method="post" action="{{ url('/student/search_course_registration') }}">
                            {{ csrf_field() }}

                        <div class="col-sm-8">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here..." name="search_text" value="{{$search_text ?? ''}}">


                            </div>
                        </div>
                        <div class="col-sm-4">


                        <button type="submit" class="btn btn-primary applynowoo">Search Here</button>


                        </div>
                        </form>
                    </div>

                    <div class="row courseregarea">
                        <div class="col-sm-12">
                            <div class="courseregareadata">
                                <h3>COURSE REGISTRATION</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row courselectarea">
                        <div class="col-sm-12">

                            <form method="post" action="{{ url('/student/courseregistration') }}">
                                {{ csrf_field() }}
                                <div class="courselectareadata row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Courses*</label>
                                    <div class="col-sm-10">
                                        <select class="form-control nowpoint" id="exampleFormControlSelect1"
                                            name="course_id" required>
                                            <option disabled>--- Select Courses ---</option>
                                            @foreach ($courses as $c)
                                                <option value="{{ $c->id }}">{{ $c->title }}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>

                                <div class="courselectclick">
                                    <button type="submit" class="btn btn-primary applynow">APPLY NOW</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row courseside">
                        <div class="col-sm-12">
                            <div class="coursesidedata">
                                <h3> COURSES</h3>
                                <table class="table mytables">
                                    <thead class="coursesidehead">
                                        <tr>
                                            {{-- <th>Course Code </th> --}}
                                            <th>Course Title</th>
                                            <th>Apply Now</th>

                                        </tr>
                                    </thead>
                                    <tbody class="mycolarea">
                                        {{-- <form method="post" action="{{ url('/student/coursereslisted') }}">
                                            {{ csrf_field() }} --}}

                                        @foreach ($courses as $key => $r_course)

                                        <form method="post" action="{{ url('/student/coursereslisted') }}">
                                            {{ csrf_field() }}
                                            <tr class="mycolareadata">



                                                <td>{{ $r_course->title }}

                                           <input type="hidden" name="course_id"  value="{!!$r_course->id!!}">
                                                </td>

                                                <td>

                                                    <button type="submit" class="btn btn-primary applynowwe">APPLY NOW</button>

                                                    </td>




                                            </tr>
                                        </form>
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
