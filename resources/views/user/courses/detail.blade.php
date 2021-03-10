@extends('user.layouts.index')

<link href="{{ asset('css/coursedetail.css') }}" rel="stylesheet">
@section('default')



    <section>
        <div class="networkheading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="networkheadingdata">
                            <h2>HRS {{ $course_detail->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="courseoverview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="courseoverviewdata">
                            <h2>COURSE OVERVIEW</h2>
                            {!! $course_detail->overview !!}
                            <h2>COURSE OUTLINE</h2>
                            <ul>
                                @foreach ($course_detail->chapters as $key => $outline)


                                    <li>{{ $outline->title }}</li>
                                @endforeach

                            </ul>
                        </div>
                        @if (!Auth::check())
                            <div class="courseoverviewclick">
                                <a href="{{ asset('student/registration') }}"><button type="button"
                                        class="btn btn-primary hrsclicks">ENROLL NOW</button></a>
                            </div>

                        @else

                            <?php
                            $user_id = Auth::id();
                            $register_course = App\Models\Course_Registered::where('user_id', $user_id)
                            ->where('course_id', $course_detail->id)
                            ->first();
                            $is_paid = $register_course->is_paid;
                            ?>

                            @if (!$register_course)
                                <div class="courseoverviewclick">
                                    <a
                                        href="{{ asset('user/courseregister?course_id=' . $course_detail->id . '&name=' . $course_detail->title) }}"><button
                                            type="button" class="btn btn-primary hrsclicks">ENROLL NOW</button></a>
                                </div>
                            @else

                                @if ($is_paid)
                                    {{-- read course --}}
                                    <div class="courseoverviewclick">
                                        <a
                                            href="{{ asset('user/courseregister?course_id=' . $course_detail->id . '&name=' . $course_detail->title) }}"><button
                                                type="button" class="btn btn-primary hrsclicks">READ COURSE NOW</button></a>
                                    </div>
                                @else
                                    {{-- go to payment --}}

                                    <?php $enc_course_id = Crypt::encrypt($course_detail->id); ?>
                                    <div class="courseoverviewclick">
                                        <form action="{{ url('/student/makepayment') }}" method="post" >
                                            {{ csrf_field() }}
                                            <input name="course_id" value="{{ $enc_course_id }}" hidden>
                                            <a href="#"><button type="submit" class="btn btn-primary hrsclicks">PROCEED TO
                                                    PAYMENT</button></a>

                                        </form>
                                    </div>
                                @endif


                            @endif
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
