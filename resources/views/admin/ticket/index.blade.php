@extends('layouts.default_module')
@section('module_name')
    List of Ticket


@stop

@section('table')

    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/ticket/excel') }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/ticket/csv') }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/ticket/pdf') }}"
                style="color: #fff">PDF</a> </button>
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

                    <a class="btn btn-info" href="{{ $tc->avatar }}" download> Download </a>
                </td>

                <td class="mypara">
                    @if ($tc->status == 'pending')

                        <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{ $tc->id }}"
                            hit_url="{{ url('/admin/ticketstatus/' . $tc->id) }}" name="activate_delete_link"
                            data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-danger ">
                                Pending</span></a>


                    @else
                        <span class="badge bg-info btn-primary ">
                            Resolved</span>
                    @endif

                </td>





            </tr>




        @endforeach



    </tbody>















@stop
