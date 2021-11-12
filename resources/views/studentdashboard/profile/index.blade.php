@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet"> --}}


<?php
$student_common = session()->get('student_common');
$student = $student_common->student;
?>


@section('default')


    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">


        <section>
            <title>
                PROFILE
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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                    <div class="grayback">
                        <form method="post" action="{{ url('/student/profileupdate') }}" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="row studentarea">
                                <div class="col-sm-12">
                                    <div class="studentareabox row">
                                        <div class="studentdboxdata col-sm-2">

                                            <input id="profile-image-upload" class="hidden" name="upload_image" type="file">

                                            <div id="profile-image">
                                                <img id="profile_image" src="{{ $student->avatar ?? asset('images/user_icon.jpg') }}"
                                                    class="img-responsive">
                                                <span class="btn btn-primary update"> here to change profile image </span>


                                            </div>



                                        </div>


                                        <div class="studentboxdatathree col-sm-8">
                                            <h4>{{ strtoupper($student->name) }}</h4>
                                            <h5>STUDENT</h5>
                                        </div>
                                        <div class="studentdboxdataimg col-sm-2">
                                            <img src="{{ asset('images/image-15.png') }}" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">

                                <div class="col-sm-12">
                                    <div class="studentform inputstyle">
                                        <input type="email" class="form-control stuform" id="email" name="email"
                                            value="{{ $student->email }}" placeholder="Email" readonly>
                                        <input type="text" class="form-control stuform" id="name" name="name"
                                            value="{{ $student->name }}" placeholder="Name">
                                        <input type="number" class="form-control stuform" id="ph_no" name="phone"
                                            value="{{ $student->mobileno ?? '' }}" placeholder="Phone No " required>
                                        <input type="text" class="form-control stuform" id="address" name="address"
                                            value="{{ $student->address ?? '' }}" placeholder="Contact Address" required>
                                        <input type="text" class="form-control stuform" id="region" name="region"
                                        value="{{ $student->region ?? '' }}"
                                            placeholder="Region ">
                                    </div>
                                    <div class="stufomclick">
                                        <button type="submit" class="btn btn-primary update">UPDATE PROFILE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


    </div>



    <script>
        $('#profile-image').on('click', function() {
            $('#profile-image-upload').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#profile-image-upload").change(function() {
            readURL(this);
        });

    </script>


@endsection
