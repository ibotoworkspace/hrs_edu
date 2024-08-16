@extends('user.layouts.index')

<link href="{{ asset('css/conferences.css') }}" rel="stylesheet">

@section('default')

    <div class="contactarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contactareadata">
                        <h2>THE INLAND EMPIRE IT</h2>
                        <h3>AND</h3>
                        <p>CYBER SECURITY SUMMIT</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/conference/cyber1.jpeg')}}" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/conference/cyber2.jpg')}}" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/conference/cyber3.jpeg')}}" class="d-block w-100" alt="Slide 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/conference/cyber4.png')}}" class="d-block w-100" alt="Slide 4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/conference/flyer1.jpg')}}"  class="d-block w-100" alt="CYBER SECURITY FLYER">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2>October 2024</h2>

                    <b>About The Event:</b>

                    <p> The Inland Empire IT & Cybersecurity Summit is an annual event
                        that aims to bring together individuals who are passionate about technology and
                        cybersecurity. The summit will feature keynote speeches from renowned speakers,
                        panel discussions, workshops, and networking opportunities.
                    </p>
                    <b>Date and Location:</b>

                    <p>The 2024 Inland Empire IT & Cybersecurity Summit will take place
                        in Inland Empire California. With its modern facilities and convenient
                        location, the convention center provides the perfect setting for this
                        exciting event.
                    </p>
                    <p>Venue: 6101 Cherry Ave, Suite102A, Fontana, CA 92336 USA.</p>

                </div>

                <div class="col-md-8">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="contactform">
                        <form method="post" action="{{ route('register_conference') }}" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="myform">
                                <div class="form-group paddown area">
                                    <input type="text" class="form-control myformdata" id="GnTName" placeholder="Enter Name"
                                        name="first_name" required>
                                </div>
                                <div class="form-group paddown area">
                                    <input type="text" class="form-control myformdata" id="GnTName" placeholder="Enter Name"
                                        name="other_names" required>
                                </div>
                                <div class="form-group paddown">
                                    <input type="email" class="form-control myformdata" id="GnTemail"
                                        placeholder="Enter email" name="email" required>
                                </div>
                                <div class="form-group paddown">
                                    <input type="text" class="form-control myformdata" id="GnTPhone"
                                        placeholder="Enter Phone" name="phone_number">
                                </div>

                                <div class="form-group paddown">
                                    <textarea class="form-control myformdata" rows="6" id="GnTcomment"
                                        placeholder="What are your expectations from this conference" name="coment" required></textarea>
                                </div>
                                <div class="myformclick">
                                    <button type="submit" class="btn btn-primary entersend">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="logosite">
                        <img src="{{ asset('images/secondlogo.png') }}" class="img-responsive">
                        <h3>FOR ENQUIRIES:</h3>
                    </div>
                    <div class="secondlogopoints">
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/location.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>416 N.H. Street Suites 5 San,<br>Bernardino CA 92410 USA.</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/call.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>Tel: +1(909) 381 9095</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/call.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>+234(70) 20319921</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/email.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>contactus@hrsedu.com</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/email.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>payment@hrsedu.com</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/email.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>sda@hrsedu.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <h3>Please See Event Details & Sponsorship</h3>

                    <h3>Ontario Convention
                        Center</h3>

                    <h4>Hosted by Iboto Empire, Sponsor By CompTIA <br>
                        For More Information Contact: info@ibotoempire.com</h4>
                   <h1>VENUE ON MAP</h1>
                   <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.1540694529017!2d-117.48917812551107!3d34.14240021296652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c3496f15b535f7%3A0x2ce567b147cb30a1!2s6101%20Cherry%20Ave%2C%20Fontana%2C%20CA%2092336%2C%20USA!5e0!3m2!1sen!2sng!4v1723817969886!5m2!1sen!2sng" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>

                </div>
            </div>
        </div>
    </div>



@endsection
