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


   


</head>

<body>


    <header>
        <div class="topheader">
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
                                    <h4>+1(909) 031-9921</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="topheaderclick">
                            <button type="button" class="btn btn-primary leadrning">LEARNING PORTAL</button>
                            <button data-target="#mNAV" data-toggle="collapse" id="mnav-button"
                                class="navbar-toggle fa fa-bars fa-2x collapsed" type="button">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>

    <section>
        <div class="twoheader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div class="logoArea">
                            <a href="{{ asset('user/home') }}">
                                <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-12">
                        <nav>
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
                                    <a href="{{ asset('student/login') }}"><button type="button"
                                            class="btn btn-primary portal">Login Account</button></a>
                                    <a href="{{ asset('user/skilladvisor') }}"><button type="button"
                                            class="btn btn-primary portal">Join us as SDA</button></a>
                                    {{-- <button type="button" class="btn btn-primary portal">Join us as SDA</button> --}}
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- </body>
</html> -->

    @yield('default')
    <section>
  <div class="newsarea">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="newsdata">
                      <h3>Connect to HRS Academy</h3>
                      <h2>JOIN OUR NEWSLETTER</h2>
                      <p>Hey you, sign up it only takes a second to be the first to <br> find out about our latest news and promotions…</p>
                  </div>                                   
              </div>
              <div class="row">
                  <div class="newsletter">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8">
                       <div class="formnews">
                        <i class="fa fa-envelope-o message" aria-hidden="true"></i>
                        <input type="search" class="form-controle enteremil" placeholder="Your Email"/>
                       </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="newsclick">
                        <button type="button" class="btn btn-primary newssign">Sign Up</button>
                      </div>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="sponserarea">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="sponserpics">
          <img style="width: 100%;" src="{{ asset('images/partnerlgoo.png') }}" />            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
                                <a href=""><img src="{{ asset('images/googleplay.png') }}" class="img-responsive"></a>
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
                            <p>Copyright © 2020 HRS Academy | All Rights Reserved | Designed by <a
                                    href="https://hatinco.com/" target="_blank"> HATINC.</a></p>
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
</body>

</html>
