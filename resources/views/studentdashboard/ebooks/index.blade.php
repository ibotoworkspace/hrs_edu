@extends('studentdashboard.layouts.index')

<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">
<link href="{{asset('css/ebooks.css')}}" rel="stylesheet">




@section('default')






<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">




    <section>
        <title>
            HRS ACADEMY-EBOOKS
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

                <div class="row bookrow">
                    <div class="col-sm-12">
                        <h3>HRS ACADEMY - EBOOKS</h3>
                    </div>
                </div>

                <div class="row pdfback">
                    <div class="col-sm-4">
                        <div class="pdfarea">
                            <div class="pdfareaimg">
                                <img src="{{asset('images/mypdf.png')}}" class="img-responsive">
                            </div>
                            <div class="pdfareadata">
                                <p>Business Analyst Best Practice</p>
                            </div>
                        </div>
                        <div class="pdfarea">
                            <div class="pdfareaimg">
                                <img src="{{asset('images/mypdf.png')}}" class="img-responsive">
                            </div>
                            <div class="pdfareadata">
                                <p>Business Analyst Best Practice</p>
                            </div>
                        </div>
                        <div class="pdfarea">
                            <div class="pdfareaimg">
                                <img src="{{asset('images/mypdf.png')}}" class="img-responsive">
                            </div>
                            <div class="pdfareadata">
                                <p>Business Analyst Best Practice</p>
                            </div>
                        </div>
                        <div class="pdfarea">
                            <div class="pdfareaimg">
                                <img src="{{asset('images/mypdf.png')}}" class="img-responsive">
                            </div>
                            <div class="pdfareadata">
                                <p>Business Analyst Best Practice</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="pdfclick">
                        <button type="button" class="btn btn-primary for">Request for Download</button><br>
                        <button type="button" class="btn btn-primary for">Request for Download</button><br>
                        <button type="button" class="btn btn-primary for">Request for Download</button><br>
                        <button type="button" class="btn btn-primary for">Request for Download</button>
                    </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="pdfdown">
                        <button type="button" class="btn btn-primary down"><i class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button><br>
                        <button type="button" class="btn btn-primary down"><i class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button><br>
                        <button type="button" class="btn btn-primary down"><i class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button><br>
                        <button type="button" class="btn btn-primary down"><i class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>



    @endsection