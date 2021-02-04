<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<link href="css/dashboard.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">

  <section>
    <title>
        DASHBOARD
    </title>
        <div class="serchsite">
            <div class="container-fluid">
                <div class="row serchbox">
                    <div class="col-sm-12">
                        <div class="serchsitedata">
                            <input type="text" class="form-control shdata" id="exampleFormControlInput1" placeholder="Serch here...">
                        </div>
                    </div>
                </div>

                <div class="row infobox">
                    <div class="col-sm-6">
                        <div class="infoboxdata row">
                            <div class="infoboxdatatext col-sm-8">                                
                                <h4>MR. WALEED HUSSAIN</h4>
                                <h3>Welcome to HRS Academy</h3>
                            </div>
                            <div class="infoboxdatatextimg col-sm-4">
                                <img src="images/image-15.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="infoboxdata row">
                            <div class="infoboxdatatext col-sm-8">
                                <h4>HELP GUIDE</h4>
                                <h3>Need help? Check out our help desk</h3>
                                <button type="button" class="btn btn-primary desk">HELP DESK</button>
                            </div>
                            <div class="infoboxdatatextimg col-sm-4">
                                <img src="images/image-16.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row courseside">
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

                <div class="row recentbox">
                    <div class="col-sm-12">
                        <div class="recentboxdata">
                            <h3>RECENT SUPPORT REQUESTS</h3>
                            <h4>It appears you do not have any support request with us yet.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

</div>


<?php include 'footer.php' ?>

