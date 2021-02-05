<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<link href="css/courseregistration.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



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
                               <a href="makepayment.php"><button type="button" class="btn btn-primary applynow">APPLY NOW</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>




</div>


<?php include 'footer.php' ?>