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


            <div class="row">
                @foreach ($courses as $course)

                <div class="col-sm-4 col-xs-12">

                        <div class="mCARD mobolecard">
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
                @endforeach

            </div>



        </div>
    </div>
</section>








@endsection
