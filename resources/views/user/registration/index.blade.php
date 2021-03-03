@extends('user.layouts.index')

<link href="{{ asset('css/registration.css') }}" rel="stylesheet">
@section('default')




    <section>
        <div class="registrationhead">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="registrationdata">
                            <h2>STUDENT REGISTRATION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block" style="text-align: center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="registrationform">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="registrationformimg">
                            <img src="{{ asset('images/loginbg.png') }}" class="img-responsive">
                        </div>
                    </div>
                    <form action="{{ url('student/registration/save') }}" method="POST">
                        @csrf

                        <div class="col-sm-6">
                            <div class="reform">
                                <h3>HRS NETWORK PRO ENROLLMENT FORM <br> WELCOME TO THE HRS ACADEMY</h3>
                                <div>
                                    <div class="form-group">
                                        <input type="text" class="form-control reformbox" id="GnTName"
                                            placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control reformbox" id="GnTemail"
                                            placeholder="Enter Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control reformbox" id="GnTPhone"
                                            placeholder="Enter Phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control reformbox" id="pwd"
                                            placeholder="Enter Password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control reformbox" id="confirm_pwd"
                                            placeholder="Confirm Password" id="CheckPasswordMatch" name="confirm">
                                    </div>

                                    <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">


                                    </div>
                                    <input type="hidden" value="roleid">
                                    <div class="reformclick">
                                        <input type="submit" class="btn btn-primary applyhere" value="save">
                                    </div>
                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <script>
        function checkPasswordMatch() {
            var password = $("#pwd").val();
            var confirmPassword = $("#confirm_pwd").val();
            if (password != confirmPassword)
                $("#CheckPasswordMatch").html("Passwords does not match!");
            else
                $("#CheckPasswordMatch").html("Passwords match.");
        }
        $(document).ready(function() {
            $("#confirm_pwd").keyup(checkPasswordMatch);
        });

    </script>









@endsection
