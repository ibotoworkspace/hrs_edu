<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<link href="css/submitrequest.css" rel="stylesheet">

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">




    <section>
        <title>
            SUBMIT A REQUEST
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

                <div class="row subrow">
                    <div class="col-sm-12">
                        <h3>SUBMIT A REQUEST</h3>
                    </div>
                </div>

                <div class="row subform">
                    <div class="col-sm-12">
                        <div class="mysubform">
                            <select name="cars" id="cars" class="form-control submine">
                                <option value="volvo">Select Related Issue</option>
                                <option value="saab">Select Related Issue</option>
                                <option value="mercedes">Select Related Issue</option>
                                <option value="audi">Select Related Issue</option>
                            </select>
                            <input type="text" class="form-control submine" placeholder="Subject">
                            <textarea name="" id="" cols="30" rows="10" class="form-control"
                                placeholder="Write your message here......."></textarea>
                            <input class="inputclick" type="file" class="form-control submines">
                        </div>
                        <div class="mysubformclick">
                            <button type="button" class="btn btn-primary submi">SUBMIT REQUEST</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>


<?php include 'footer.php' ?>