<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<link href="css/proceedpayment.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">




<section>
            <title>PROCEED</title>
            <div class="procedarea">
                <div class="container-fluid">

                    <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div>

                    <div class="row procedrow">
                        <div class="col-sm-12">
                            <h3>PROCEED TO PAYMENT</h3>
                        </div>
                    </div>

                    <div class="row procedform">
                        <div class="col-sm-12">
                            <div class="pform">
                                <div class="form-group row">
                                <i class="fa fa-credit-card mycard" aria-hidden="true"></i><input type="text" class="form-control mycarddata" id="inputAddress"
                                        placeholder="Credit Card Number*">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group row">
                                    <i class="fa fa-calendar mycardss" aria-hidden="true"></i><input type="text" class="form-control mycarddata" placeholder="Expiration (MM/YY)*">
                                    </div>
                                    <div class="col-sm-6 form-group row foum">
                                    <i class="fa fa-lock mycards" aria-hidden="true"></i><input type="text" class="form-control mycarddata" placeholder="Card Security Code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <i class="fa fa-map-marker mycards" aria-hidden="true"></i><input type="text" class="form-control mycarddata" id="inputAddress"
                                        placeholder="Postal Code*">
                                </div>
                                <div class="row">
                                    <div class="pformdata">
                                        <p>Your personal data will be used to process your order, support your
                                            experience throughout this website, and for <br> 
                                            other purposes described in our privacy policy.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="pformclick">
                                        <button type="button" class="btn btn-primary pformpress">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>



</div>


<?php include 'footer.php' ?>