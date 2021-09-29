<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">




    <style>
        .newsarea {
            background-image: url(images/newsletter.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
            padding: 50px 10px;
        }
        textarea#GnTcomment {
    color: burlywood;
}
input#GnTName {
    color: bisque;
}
input#GnTemail {
    color: burlywood;
}
input#GnTPhone {
    color: burlywood;
}
/* input#GnTName {
} */

        /* .contactarea {
            background-image: url(images/contactbg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
            padding: 30px 10px;
        } */

    </style>


</head>

<body>


    <header>
        <div class="topheader hidden-xs">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="topheaderdata">
                            <div class="topbox">
                                <div class="topboxicon">
                                    <img src="{{ asset('images/location.png') }}" class="img-responsive">
                                </div>
                                <div class="topboxdata">
                                    <h4>416 N.H. Street Suites 5 San, Bernardino CA 92410 USA.</h4>
                                </div>
                            </div>

                            <div class="topbox">
                                <div class="topboxicon">
                                    <img src="{{ asset('images/email.png') }}" class="img-responsive">
                                </div>
                                <div class="topboxdata">
                                    <h4>contactus@hrsedu.com</h4>
                                </div>
                            </div>

                            <div class="topbox">
                                <div class="topboxicon">
                                    <img src="{{ asset('images/call.png') }}" class="img-responsive">
                                </div>
                                <div class="topboxdata">
                                    <h4>+1(909) 381 9095</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $user_data = Auth::user();
                    if(!$user_data){
                        $user_data = new \stdClass();
                        $user_data->role_id = 0;
                    }

                    ?>
                     @if ( $user_data->role_id == 2)
                     <div class="col-sm-2">
                        <div class="topheaderclick">

                        </div>
                    </div>

                     @elseif( $user_data->role_id == 3)
                     <div class="col-sm-2">
                        <div class="topheaderclick">


                        </div>
                    </div>

                     @else


                    <div class="col-sm-2">
                        <div class="topheaderclick">
                            <a href="{{ url('student/registration') }}" class="btn btn-primary leadrning">LEARNING
                                PORTAL</a>
                            <!-- <button data-target="#mNAV" data-toggle="collapse" id="mnav-button"
                                class="navbar-toggle fa fa-bars fa-2x collapsed" type="button">
                            </button> -->
                        </div>
                    </div>
                    @endif



                            @if ( $user_data->role_id == 2)
                            <div class="col-sm-1">
                             <button id="8" class="oo" >
                                    <a href="{{ asset('student/profile') }}">
                                        <img src="{{ asset('images/icon-26.png') }}" class="img-responsive">

                                    </a>


                                </button>
                            </div>
                                @else
                                @endif

                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}



    </header>

    <section>
        <div class="twoheader">
            <div class="container-fluid">
                <!-- <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div class="logoArea">
                            <a href="{{ asset('student/home') }}">
                                <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-12">
                        <!-- <nav>
                            <div class="jump" id="nmNAV">
                                <div class="navbar-collapse nav-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li id="11">
                                            <a href="{{ asset('user/home') }}"><span class="headpad">Home</span> </a>
                                        </li>
                                        <li id="4">
                                            <a href="{{ asset('user/aboutus') }}"><span class="headpad">About us</span>
                                            </a>
                                        </li>
                                        <li id="5">
                                            <a href="{{ asset('user/courses') }}"><span class="headpad">Courses</span>
                                            </a>
                                        </li>
                                        <li id="6">
                                            <a href="{{ asset('user/resource') }}"><span
                                                    class="headpad">Resource</span> </a>
                                        </li>
                                        <li id="7">
                                            <a href="{{ asset('user/contactus') }}"><span
                                                    class="headpad">Contact</span> </a>
                                        </li>
                                    </ul>
                                    <a href="{{ asset('login') }}"><button type="button"
                                            class="btn btn-primary portal">Login Account</button></a>
                                    <a href=""><button type="button"
                                            class="btn btn-primary portal">Join us as SDA</button></a>
                                     <!-- <button type="button" class="btn btn-primary portal">Join us as SDA</button> {{ asset('user/skilladvisor') }}  -->
                <!-- </div>
                            </div>
                        </nav> -->
                <!-- </div>
                </div> -->

                <nav class="navbar navbar-default navbg" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{ asset('user/home') }}">
                            <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <ul class="nav navbar-nav mUL">
                            <li id="11">
                                <a href="{{ asset('user/home') }}"><span class="headpad">Home</span> </a>
                            </li>
                            <li id="4">
                                <a href="{{ asset('user/aboutus') }}"><span class="headpad">About us</span>
                                </a>
                            </li>
                            <li id="5">
                                <a href="{{ asset('user/courses') }}"><span class="headpad">Courses</span>
                                </a>
                            </li>

                            @if ( $user_data->role_id == 2)
                                 <li class="dropdown" id="mydropeer">
                                      <a href="#" class="dropdown-toggle"
                                      data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false"> <span class="headpader"> Resource</span>
                                    </a>
                                                <ul class="dropdown-menu my">
                                                  <li><a href="{{ asset('user/resource') }}" class="myblogarea">Blog </a></li>
                                                  <li><a href="{{ asset('student/library') }}"  class="myblogarea">Library</a></li>
                                                </ul>

                                 </li>
                                 @else
                                  <li id="6">

                            </li>
                            @endif
                            <li id="7">
                                <a href="{{ asset('user/contactus') }}"><span class="headpad">Contact</span> </a>
                            </li>
                            <li id="8">
                                <a href="https://www.comptia.org/" class="com"><span class="headpadcom">CompTIA</span> </a>
                            </li>
                            <li id="9">
                                <a href="https://w3.testout.com/" class="test"><span class="headpadtest">TestOut</span> </a>

                            </li>
                        </ul>





                        <?php
                        use App\User;
                        $user_data = Auth::user();
                        // dd($user_data);
                        if(!$user_data){
                            $user_data = new \stdClass();
                            $user_data->role_id = 0;
                        }

                        ?>

                        @if ( $user_data->role_id == 2)
                               @else
                                            <div class="crbtngroup">
                                                <a href="{{ asset('login') }}"><button type="button" class="btn btn-primary portal">Login
                                                        Account</button></a>
                                            @endif


                                            @if ( $user_data->role_id == 3)

                                            @else
                                            <a href="{{ asset('user/add/skilladvisor') }}"><button type="button"
                                                class="btn btn-primary portal">Join us as SDA</button></a>


                                    @endif
                        </div>

                        <!-- <button type="button" class="btn btn-primary portal">Join us as SDA</button>  -->
                        <!-- {{ asset('user/skilladvisor') }} -->
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </section>





    <!-- </body>
</html> -->

    @yield('default')

    <footer>
        <div class="footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="first">
                            <div class="companyarea">
                                <h4>COMPANY</h4>
                                <ul>
                                    <li>About Us</li>
                                    <li>Why Choose Us</li>
                                    <li>Become Our SDA</li>
                                    <li>Terms of Service</li>
                                    <li>Privacy Policies</li>
                                    <li>Career & Jobs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="second">
                            <div class="companyarea">
                                <h4>COURSES</h4>
                                <ul>
                                    <li>HRS Server Pro</li>
                                    <li>HRS Network Pro</li>
                                    <li>HRS Linux Pro</li>
                                    <li>HRS Ethical Hacking</li>
                                    <li>HRS Security Pro</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="third">
                            <div class="companyarea">
                                <h4>TRAINING SERVICES</h4>
                                <ul>
                                    <li>Corporate Training</li>
                                    <li>Online Training</li>
                                    <li>Certifications</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="fourth">
                            <div class="companyarea">
                                <h4>HELP & SUPPORT</h4>
                                <ul>
                                    <li>Help Cente</li>
                                    <li>Contact Us</li></a>
                                </ul>
                                <a href=""><img src="{{ asset('images/googleplay.png') }}"
                                        class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <footer>
        <div class="leastfooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="copydata">
                            <p>Copyright © 2020 HRS Academy | All Rights Reserved |

                                Designed by <a href="https://hatinco.com/" target="_blank"> HATINC.</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
