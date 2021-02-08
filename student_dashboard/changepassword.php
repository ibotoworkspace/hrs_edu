<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<link href="css/changepassword.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



    <section>
        <title>
            CHANGE PASSWORD
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

                <div class="row changerow">
                    <div class="col-sm-12">
                        <h3>CHANGE PASSWORD</h3>
                    </div>
                </div>

                <div class="row invoicpointarea">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="password" class="form-control pawd" id="exampleInputPassword1"
                                placeholder="New Password*">
                            <input type="password" class="form-control pawd" id="exampleInputPassword1"
                                placeholder="Re-type Password*">
                        </div>
                        <button type="button" class="btn btn-primary reset">RESET PASSWORD</button>
                    </div>
                </div>
            </div>
        </div>
    </section>




</div>


<?php include 'footer.php' ?>