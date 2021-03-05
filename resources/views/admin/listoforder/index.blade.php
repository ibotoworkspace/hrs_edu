@extends('layouts.default_module')
@section('module_name')
    List of Order


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
                <div class="bestcso">S. No.</div>
            </th>
            <th class="mycourse">
                <div class="latestbestcourse">User ID</div>
            </th>


            <th class="option">
                <div class="bestoption">Account Holder</div>

            </th>
            <th class="option">
                <div class="bestoption">Promo Code</div>

            </th>
            <th class="option">
                <div class="bestoption">Paid Amount</div>

            </th>
            <th class="option">
                <div class="bestoption">Created On</div>

            </th>

            <th class="option">
                <div class="bestoption"> Status</div>

            </th>
            <th class="option">
                <div class="bestoption">Option</div>

            </th>




        </tr>
    </thead>

    <tbody>

        @foreach ($orders as $key => $ord)

            <tr class="myarrow">
                <td class="mynbr">
                    <div class="bestnbr">{{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs">HRS-{{ $ord->user->id }}</div>
                </td>
                <td class="mynbr">
                    <div class="bestnbr">{{ $ord->user->name }}</div>
                </td>
                <td class="mynbr">
                    <div class="bestnbr">--</div>
                </td>

                <td class="mynbr">
                    <div class="bestnbr">${{ $ord->registerCourse->course->price }}</div>
                </td>
                <td class="mynbr">
                    <div class="bestnbr">{{ $ord->created_at }}</div>
                </td>
                <td class="mystatus">
                    <div class="status"><button type="button" class="btn btn-primary onstatus"
                            id="mystatus lateststatus">Sub Canceled</button></div>
                </td>



                <td class="optionss">
                    <div class="myoptionss">
                        <i class="fa fa-cog settinger " aria-hidden="true"></i>
                    </div>
                </td>
            </tr>
        @endforeach





    </tbody>















@stop
