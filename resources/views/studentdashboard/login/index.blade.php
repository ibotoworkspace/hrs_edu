@extends('user.layouts.index')

<link href="{{asset('css/contactus.css')}}" rel="stylesheet"/>
<link href="{{asset('css/studentlogin.css')}}" rel="stylesheet"/>

@section('default')

<section>
    {{-- <div class="loginHeading">
        <h2><strong>
            Student Login
        </strong></h2>
    </div> --}}
    <div class="" style="background-color: #243439eb;">
        <div class="container">
            <div class="">

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <img src="{{ asset('images/icon.png') }}" class="img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                    <p class="loginpara">HRS LOGIN AN ACCOUNT</p>
                    <p class="loginpara">WELCOME TO THE HRS ACADEMY</p>
                        <form method="post" action="{{ url('/student/checklogin') }}">
                            {{ csrf_field() }}
                            <?php

                    // $user_data = Auth::user();
                    // if(!$user_data){
                    //     $user_data = new \stdClass();
                    //     $user_data->role_id = 0;
                    // }



// else($user->role_id == 1){

// return redirect()->back('admin/login');

// }

?>

   <?php
    $user_data = Auth::user();
//     if ( $user_data->role_id == 1){

//         return redirect('admin/login');

//    }



?>
                            <div class="form-group">
                                <label style="color: #fff;">Enter Email</label>
                                <input type="email" name="email" class="form-control " />
                            </div>
                            <div class="form-group">
                                <label style="color: #fff;">Enter Password</label>
                                <input type="password" name="password" class="form-control reformbox" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" class="btn loginbtn" value="Login to Your Account" />
                            </div>
                        </form>
                        <div class="form-group">
                                <a href="" style="color: #fff;">Forgot your Password?</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
