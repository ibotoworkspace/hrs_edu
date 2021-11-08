<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lecturer DashBoard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
                href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <!--  <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a> -->


            <header>
                <div class="topheader">
                    <div class="container-fluid">
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
                            {{-- <div class="col-sm-3">
                                <div class="topheaderclick">
                                    <button type="button" class="btn btn-primary leadrning">LEARNING PORTAL</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </header>

            <section>
                <div class="twoheader">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2 col-xs-12">
                                <div class="area">
                                    <a  href="#">
                                        <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <nav>
                                    <div class="jump">
                                        <div class="navbar-collapse nav-collapse collapse">
                                            {{-- <ul class="nav navbar-nav">
                                                <li id="11">
                                                    <a href="{{ asset('user/home') }}"><span
                                                            class="headpad">Home</span>
                                                    </a>
                                                </li>
                                                <li id="4">
                                                    <a href="{{ asset('user/aboutus') }}"><span class="headpad">About
                                                            us</span> </a>
                                                </li>
                                                <li id="5">
                                                    <a href="{{ asset('user/courses') }}"><span
                                                            class="headpad">Courses</span> </a>
                                                </li>
                                                <li id="6">
                                                    <a href="{{ asset('user/resource') }}"><span
                                                            class="headpad">Resource</span> </a>
                                                </li>
                                                <li id="7">
                                                    <a href="{{ asset('user/contactus') }}"><span
                                                            class="headpad">Contact</span> </a>
                                                </li>
                                                <li id="7">
                                                    <a href="{{ asset('student/courseregistration') }}"><span
                                                            class="headpad">Course Registration</span> </a>
                                                </li>
                                            </ul> --}}
                                            @if (Auth::check())
                                                <a href="{{ asset('lecturer/logout') }}"><button type="button"
                                                        class="btn btn-primary portal">Logout</button></a>
                                            @else
                                                <a href="{{ asset('login') }}"><button type="button"
                                                        class="btn btn-primary portal">Login Account</button></a>
                                            @endif


                                            {{-- <button type="button" class="btn btn-primary portal">Join us as SDA</button> --}}
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>





    <!-- Sidebar -->

    <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
        <a href="{{ asset('javascript:void(0)') }}" onclick="w3_close()"
            class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
            <i class="fa fa-remove"></i>
        </a>




        <ul class="nav navbar-nav side-nav mysidemenu">
            <li>
                <a href="{{ asset('lecturer/dashboard') }}"> Dashboard</a>
            </li>
            <li>
                <a href="{{ asset('lecturer/profile') }}"> Profile</a>
            </li>

            <li>
                <a href="{{ asset('lecturer/mygroup') }}"> My Groups</a>
            </li>
            <li>
                <a href="{{ asset('lecturer/changepassword') }}"> Change Password</a>
            </li>
            <li>
                <a href="{{ asset('lecturer/logout') }}"> Logout</a>
            </li>
        </ul>





    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>



    {{-- sidebar end --}}








    @yield('default')

    <footer id="myFooter">




        <div class="leastfooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="copydata">
                            <p>Copyright © 2020 HRS Academy | All Rights Reserved | <a
                                    href="{{ asset('user/privacy&policy') }}" target="">Privacy Policy </a> |
                                <a href="{{ asset('user/terms&condition') }}" target="_blank">Term & Condition </a>|
                                Designed by <a href="https://hatinco.com/" target="_blank"> HATINC.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="socilaicon">
                            <a href=""><img src="{{ asset('images/twitter.png') }}" class="img-responsive"></a>
                            <a href=""><img src="{{ asset('images/printerst.png') }}" class="img-responsive"></a>
                            <a href=""><img src="{{ asset('images/linkedin.png') }}" class="img-responsive"></a>
                            <a href=""><img src="{{ asset('images/instagram.png') }}" class="img-responsive"></a>
                            <a href=""><img src="{{ asset('images/facebook.png') }}" class="img-responsive"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </footer>
    @yield('app_jquery')
    <script>
        $(function() {

            $(".close-modal in").click(function() {
                alert("Handler for .click() called.");
                $('.modal-backdrop').remove();
                $('.modal').modal('hide');
            });
        })
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }

    </script>

</body>

</html>
