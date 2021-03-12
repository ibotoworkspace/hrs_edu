@extends('user.layouts.index')

<link href="{{ asset('css/contactus.css') }}" rel="stylesheet">

@section('default')

    <div class="contactarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contactareadata">
                        <h2>CONTACT US</h2>
                        <h3>WE’RE HAPPY TO HELP!</h3>
                        <p>GET IN TOUCH! WE LOOK FORWARD TO HEARING FROM YOU.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="logosite">
                        <img src="{{ asset('images/secondlogo.png') }}" class="img-responsive">
                        <h3>CORPORATE HEAD OFFICE</h3>
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
                                <p>+1(909) 031-9921</p>
                            </div>
                        </div>
                        <div class="infobox">
                            <div class="infoboximg">
                                <img src="{{ asset('images/call.png') }}" class="img-responsive">
                            </div>
                            <div class="infoboxdata">
                                <p>+234(702) 559-9031</p>
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="contactform">
                        <form method="post" action="{{ url('/user/contactform') }}" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="myform">
                                <div class="form-group paddown">
                                    <input type="text" class="form-control myformdata" id="GnTName" placeholder="Enter Name"
                                        name="name" required>
                                </div>
                                <div class="form-group paddown">
                                    <input type="email" class="form-control myformdata" id="GnTemail"
                                        placeholder="Enter email" name="email" required>
                                </div>
                                <div class="form-group paddown">
                                    <input type="number" class="form-control myformdata" id="GnTPhone"
                                        placeholder="Enter Phone" name="phone_no">
                                </div>
                                <div class="form-group paddown">
                                    <input type="text" class="form-control myformdata" id="GnTName"
                                        placeholder="Enter Subject" name="subject" required>
                                </div>
                                <div class="form-group paddown">
                                    <textarea class="form-control myformdata" rows="6" id="GnTcomment"
                                        placeholder="Enter Comment" name="coment" required></textarea>
                                </div>
                                <div class="myformclick">
                                    <button type="submit" class="btn btn-primary entersend">SEND NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
