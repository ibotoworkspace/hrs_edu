@extends('studentdashboard.layouts.index')

<link href="{{asset('css/newregster.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')






<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



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
                                    <th>Action</th>
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


    @endsection