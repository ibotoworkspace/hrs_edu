@extends('user.layouts.index')

<link href="{{asset('css/registration.css')}}" rel="stylesheet">
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
    <div class="registrationform">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="registrationformimg">
                        <img src="{{asset('images/loginbg.png')}}" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="reform">
                        <h3>HRS NETWORK PRO ENROLLMENT FORM <br> WELCOME TO THE HRS ACADEMY</h3>
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control reformbox" id="GnTName" placeholder="FULL NAME " name="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control reformbox" id="GnTemail" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control reformbox" id="GnTPhone" placeholder="Enter Phone" name="Phone">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control reformbox" id="pwd" placeholder="Enter password">                                   
                            </div> 
                            <div class="form-group">
                            <input type="password" class="form-control reformbox" id="pwd" placeholder="Confirm password">                            
                            </div>                           
                        </div>
                        <div class="reformclick">
                            <button type="button" class="btn btn-primary applyhere">APPLY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










@endsection