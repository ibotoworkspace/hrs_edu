@extends('studentdashboard.layouts.index')

<link href="{{asset('css/submitrequest.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')





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
                        <form method="post" action="{{ url('/student/ticket/add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mysubform">
                                <select name="issue" id="issue" class="form-control submine" required>
                                    <option selected="selected" disabled>Select Related Issue</option>
                                    <option value="payment">Payment Related Issue</option>
                                    <option value="technical">Technical Related Issue</option>
                                    <option value="support">Support Related Issue</option>
                                    <option value="others">Others Issue</option>
                                </select>
                                <input type="text" name="subject" class="form-control submine" placeholder="Subject" required>
                                <input type="text" name="name" class="form-control submine" placeholder="Name">
                                <textarea name="mesage" id="" cols="30" rows="10" class="form-control"
                                    placeholder="Write your message here......." required></textarea>
                                <input class="inputclick" name="avatar" type="file" class="form-control submines">
                            </div>
                            <div class="mysubformclick">
                                <button type="submit" class="btn btn-primary submi">SUBMIT REQUEST</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>



    @endsection