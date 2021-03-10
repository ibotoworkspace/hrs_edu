@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/submitrequest.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



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
                            <h3>View a Ticket</h3>
                        </div>
                    </div>

                    <div class="row courseside">
                        <div class="col-sm-12">
                            <div class="coursesidedata">
                                <table class="table mytables">
                                    <thead class="coursesidehead">
                                        <tr>
                                            <th>Tickect No</th>
                                            <th>Subject</th>
                                            <th>Issue Type</th>
                                            <th>Message </th>
                                            <th>Status </th>
                                        </tr>
                                    </thead>
                                    <tbody class="mycolarea">
                                        @foreach ($user_ticket as $key=> $ut)

                                            <tr class="mycolareadata">
                                                <td>HRS-TK{{ $ut->id }}</td>
                                                <td>{{ $ut->subject }}</td>
                                                <td>{{ $ut->issue }}</td>
                                                <td>{{ $ut->message }}</td>

                                                @if ($ut->status == 'pending')
                                                    <td>
                                                        <span class="badge badge-dark bluebadge">Pending</span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span class="badge badge-secondary greenbadge bluebadge">CLosed</span>
                                                    </td>
                                                @endif


                                            </tr>
                                        @endforeach

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
