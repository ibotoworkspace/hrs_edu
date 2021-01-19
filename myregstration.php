<?php 
include 'index.php'
?>

<link href="css/studentdashboard.css" rel="stylesheet">
<link href="css/myregstration.css" rel="stylesheet">





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
                MY REGISTERED
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

                <div class="row coursesides">
                    <div class="col-sm-12">
                        <div class="coursesidedata">
                            <h3>MY REGISTERED COURSES</h3>
                        <table class="table mytables">
                            <thead class="coursesidehead">
                                <tr>
                                    <th>Course Code </th>
                                    <th>Course Title</th>
                                    <th>Date of Registration</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="mycolarea">
                                <tr class="mycolareadata">
                                    <td>HRS4697</td>
                                    <td>HRS Network Pro</td>
                                    <td>15, December 2020</td>
                                    <td><button type="button" class="btn btn-primary payment">Make Payment</button></td>
                                </tr>
                                <tr class="mycolareadata">
                                    <td>HRS1018</td>
                                    <td>Routing and Switching Pro</td>
                                    <td>16, December 2020</td>
                                    <td><button type="button" class="btn btn-primary payment">Make Payment</button></td>
                                </tr>
                                <tr class="mycolareadata">
                                    <td>HRS1222</td>
                                    <td>Server Pro 2016 (Identity 4.0)</td>
                                    <td>17, December 2020</td>
                                    <td><button type="button" class="btn btn-primary payment">Make Payment</button></td>
                                </tr>                                
                            </tbody>
                        </table>
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

<?php
include 'studentdashfooter.php'
?>