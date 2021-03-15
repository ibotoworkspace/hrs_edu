@extends('layouts.default_module')
@section('module_name')
    List of Ticket


@stop

@section('table')

    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
    </div>


    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">Member ID</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Account Holder</div>
            </th>


            <th class="option">
                <div class="bestoption">Related Issue</div>

            </th>

            <th class="option">
                <div class="bestoption">Subject</div>

            </th>
            <th class="option">
                <div class="bestoption">Message</div>

            </th>
            <th class="option">
                <div class="bestoption">Attachment</div>

            </th>
            <th class="option">
                <div class="bestoption">Action</div>

            </th>






        </tr>
    </thead>

    <tbody>
        @foreach ($tickets as $tc)
            <tr class="myarrow">
                <td class="mynbr">
                    <div class="bestnbr"> 1</div>
                </td>
                <td class="hrs">
                    <div class="besthrs">{!! $tc->name !!}
                </td>
                <td class="mynbr">
                    <div class="bestnbr">{!! $tc->issue !!}</div>
                </td>
                <td class="mynbr">
                    <div class="bestnbr">{!! $tc->subject !!}</div>
                </td>

                <td class="mypara">
                    <div class="bestpara">{!! $tc->message !!}</div>
                </td>
                <td class="mypara">
                    
                     <a class="btn btn-info" href="{{$tc->avatar}}" download> Download </a>
                </td>

                <td class="mypara">
                    <span class="badge badge-primary">{{ $tc->status}}</span>
                </td>





            </tr>




        @endforeach



    </tbody>















@stop
