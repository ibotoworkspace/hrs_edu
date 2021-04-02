@extends('lecturer.layouts.index')

<link href="{{ asset('css/changepassword.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')





    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">



        <section>
            <title>
                CHANGE PASSWORD
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    <div class="row serchbox">
                        <div class="col-sm-12">
                        </div>
                    </div>

                    <div class="row changerow">
                        <div class="col-sm-12">
                            <h3>CHANGE PASSWORD</h3>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row invoicpointarea">
                        <div class="col-sm-12">
                            <form action="{{ url('lecturer/forgetpassword') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="password" class="form-control pawd" id="pwd" placeholder="New Password*"
                                        name="password">
                                    <input type="password" class="form-control pawd" id="confirm_pwd"
                                        placeholder="Re-type Password*" name="confirm">

                                    <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
                                    </div>



                                    <button type="submit" class="btn btn-primary reset" style="display: none">RESET
                                        PASSWORD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>




    </div>

    <script>
        function checkPasswordMatch() {
            var password = $("#pwd").val();
            var confirmPassword = $("#confirm_pwd").val();
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").html("Passwords does not match!");
                $(".reset").css('display', 'none');
            } else {
                $("#CheckPasswordMatch").html("Passwords match.");
                $(".reset").css('display', 'block');
            }
        }
        $(document).ready(function() {
            $("#confirm_pwd").keyup(checkPasswordMatch);
        });

    </script>

@endsection
