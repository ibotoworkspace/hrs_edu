@extends('studentdashboard.layouts.index')

<link href="{{asset('css/viewticket.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')





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
                        <h3>VIEW TICKETS</h3>
                    </div>
                </div>

                <div class="row pararow">
                    <div class="col-sm-12">
                        <p>You do not have any unresolved ticket at this time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>


    @endsection