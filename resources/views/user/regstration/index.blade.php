@extends('user.layouts.index')

<link href="{{asset('css/regstration.css')}}" rel="stylesheet">
@section('default')







<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top smaz" role="navigation">

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav mysidemenu">
                <li>
                    <a href="http://localhost/hrs_backend/studentdashboard.php"> Dashboard</a>
                </li>
                <li>
                    <a href="http://localhost/hrs_backend/studentprofile.php"> Profile</a>
                </li>
                <li>
                    <a href="http://localhost/hrs_backend/regstration.php"> Apply for Course</a>
                </li>
                <li>
                    <a href="http://localhost/hrs_backend/myregstration.php"> My Courses</a>
                </li>
                <li>
                    <a href="http://localhost/hrs_backend/makepayment.php"> Payments</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"> Resource Center</a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#"> Library</a></li>
                        <li><a href="#"> Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"> Enquiry & Support</a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"> Submit a request</a></li>
                        <li><a href="#"> View Tickets</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Change Password</a>
                </li>
                <li>
                    <a href="#"> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">

        <section>
            <title>
                REGISTRATION
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div>

                    <div class="row courseregarea">
                        <div class="col-sm-12">
                            <div class="courseregareadata">
                                <h3>COURSE REGISTRATION</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row courselectarea">
                        <div class="col-sm-12">
                            <div class="courselectareadata row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Courses*</label>
                                <div class="col-sm-10">
                                    <select class="form-control nowpoint" id="exampleFormControlSelect1">
                                        <option>Choose..</option>
                                        <option>Routing and Switching Pro</option>
                                        <option>Server Pro 2016 (Identity 4.0)</option>
                                        <option>HRS Ethical Hacking</option>
                                        <option>HRS Desktop Pro</option>
                                        <option>Server Pro 2016 (Networking 4.0)</option>
                                        <option>HRS IT Client Pro</option>
                                        <option>IT Fundamental Pro</option>
                                        <option>HRS Security Pro</option>
                                        <option>HRS Network Pro</option>
                                        <option>HRS Office Pro</option>
                                        <option>HRS Linux Pro</option>
                                        <option>HRS Server Pro</option>
                                        <option>HRS PC Pro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="courselectclick">
                                <button type="button" class="btn btn-primary applynow">APPLY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>




<script>
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
    });
})
</script>






@endsection