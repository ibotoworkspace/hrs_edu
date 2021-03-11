@extends('user.layouts.index')

<link href="{{ asset('css/courses.css') }}" rel="stylesheet">
@section('default')









<section>
    <div class="coursesarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="coursesareahead">
                        <h2>HRS CERTIFICATION COURSES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="coursesback">
        <div class="container">

            <!-- <div class="row">
                    @foreach ($courses as $course)


                        <div class="col-sm-4">
                            <div class="coursesbox">
                                <div class="coursesboximg">
                                    <img src="{{ $course->avatar }}" class="img-responsive">
                                </div>
                                <div class="coursesboxdata">
                                   <h3>HRS {{ $course->title }}</h3>
                                    <div class="max-lines">{!! $course->overview !!}
                                    </div>
                                </div> 
                                <div class="coursesboxclick">
                                    <a href="{{ asset('user/coursedetail?course_id=' . $course->id) }}">
                                    <button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div> -->
            <div class="row">
                @foreach ($courses as $course)

                <div class="col-sm-4">
                    <div class="container">
                        <div class="mCARD">
                            <img src="{{ $course->avatar }}" class="cardimg">
                            <h3>HRS {{ $course->title }}</h3>
                            <div class="max-lines">
                                {!! $course->overview !!}
                            </div>
                            <div class="coursesboxclick">
                                <a class="btn btn-primary readarea" href="{{ asset('user/coursedetail?course_id=' . $course->id) }}">
                                    READ MORE
                                </a>
                                <!-- <button type="button" class=""></button> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>



        </div>
    </div>
</section>













@endsection