

@extends('user.layouts.index')

<link href="{{asset('css/contactus.css')}}" rel="stylesheet">
  
  @section('default')

<section>
<h3 class="myheading">
User Login

</h3>
    <div class="contactarea">
        <div class="container">
            
            <div class="row">
              
                <div class="col-sm-8">
                    <div class="contactform">
                      <div class="myform">
                        <div class="form-group paddown">
                          <input type="text" class="form-control myformdata" id="GnTName" placeholder="Enter Name" name="Name">
                        </div>
                        <div class="form-group paddown">
                          <input type="email" class="form-control myformdata" id="GnTemail" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group paddown">
                          <input type="tel" class="form-control myformdata" id="GnTPhone" placeholder="Enter Phone" name="Phone">
                        </div>
                        <div class="form-group paddown">
                          <input type="text" class="form-control myformdata" id="GnTName" placeholder="Enter Password" name="Password">
                        </div>
                      
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

