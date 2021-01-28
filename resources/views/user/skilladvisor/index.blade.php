@extends('user.layouts.index')

<link href="{{asset('css/skilladvisor.css')}}" rel="stylesheet">
@section('default')







<section>
    <title>
    DEVELOPMENT ADVISOR
    </title>
    <div class="advisortop">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advisordata">
                        <h2>SKILL DEVELOPMENT ADVISOR</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="skillformarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="formtext">
                        <h3>JOIN US AS SDA</h3>
                        <p>WELCOME TO THE HRS ACADEMY</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 modalform">
                <input type="text" class="form-control mpdalpad" placeholder="First Name">
                <input type="email" class="form-control mpdalpad" placeholder="Email Address">
                <input type="password" class="form-control mpdalpad" placeholder="Password">
                </div>
                <div class="col-sm-6 modalform">
                <input type="text" class="form-control mpdalpad" placeholder="Last Name">
                <input type="tel" class="form-control mpdalpad" placeholder="Phone No">
                <input type="password" class="form-control mpdalpad" placeholder="Confirm Password">
                </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                    <div class="checkarea">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="checkarea">
                        <label for="vehicle1" class="checktext">By creating an account, you agree to our Terms and Conditions and Privacy Policy</label>
                    </div>
               </div>
            </div>
            <div class="row modalbutton">
               <div class="col-sm-12">
                    <div class="checkmodal">                        
                        <div class="container">
                            <button type="button" class="btn btn-info btn-lg modalclick" data-toggle="modal" data-target="#myModal">Create Account</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="modalimg">
                                                        <img src="{{asset('images/tick.png')}}" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="modalimgdata">
                                                        <p>An email with verification link was <br> sent to waleedhussain@hatinco.com</p>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>









@endsection