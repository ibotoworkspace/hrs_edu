@extends('user.layouts.index')

<link href="{{ asset('css/registration.css') }}" rel="stylesheet" />
<link href="{{ asset('css/regstration.css') }}" />
<link href="{{ asset('css/regstration.css') }}" rel="stylesheet">
@section('default')


    <section>
        <div class="registrationhead">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="registrationdata">
                            <h2>Skill Development Advisor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block" style="text-align: center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>

        @elseif ($message = Session::get('error'))
            <div class="alert alert-danger alert-block" style="text-align: center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="registrationform">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="registrationformimg">
                            <img src="{{ asset('images/loginbg.png') }}" class="img-responsive">
                        </div>
                    </div>


                    <div class="col-sm-6 col-xs-12">
                        <form action="{{ url('user/add/skilladvisor') }}" method="POST">
                            @csrf
                            <div class="reform">
                                <h3> WELCOME TO THE HRS ACADEMY</h3>

                                <div class="form-group">
                                    <input type="text" class="form-control " id="GnTName" placeholder="Full Name"
                                        name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " id="sdkaddress" placeholder="Address"
                                        name="address" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control " id="GnTemail" placeholder="Enter Email"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control " id="GnTPhone" placeholder="Enter Mobile no"
                                        name="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control " id="pwd" placeholder="Enter Password"
                                        name="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control " id="confirm_pwd"
                                        placeholder="Confirm Password" id="CheckPasswordMatch" name="confirm">
                                </div>

                                <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">


                                </div>
                                <input type="hidden" value="roleid">
                                <div class="reformclick">
                                    <input type="submit" class="btn btn-primary applyhere" value="Submit">
                                </div>
                            </div>
                        </form>
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
