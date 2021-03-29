@extends('layouts.default_module')
@section('module_name')
    List of User
@stop




@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}



@section('table')
    {!! Form::open(['method' => 'get', 'url' => ['admin/report/user'], 'files' => true]) !!}
    @include('report.user.partial.searchfilters')
    {!! Form::close() !!}


    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">S.No.</div>
            </th>
            <th class="myso">
                <div class="bestcso">User Name</div>
            </th>
            <th class="myso">
                <div class="bestcso">User Email</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Course Name</div>
            </th>
            </th>
            <th class="option">
                <div class="bestoption">Is Completed</div>

            </th>
            <th class="option">
                <div class="bestoption">Is Paid</div>

            </th>
            <th class="option">
                <div class="bestoption">Voucher Request</div>

            </th>
            <th class="option">
                <div class="bestoption">Certificate Request</div>

            </th>
            <th class="option">
                <div class="bestoption">Badge Request</div>

            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($register_course as $key => $reg_course)
            <tr class="myarrow">

                <td class="hrs">
                    <div class="besthrs" name="title">{!! $key + 1 !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="title">{!! $reg_course->user->name ?? '' !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="title">{!! $reg_course->user->email ?? '' !!}</div>
                </td>

                <td class="myquiz">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $reg_course->course->title ?? '' !!}</div>
                </td>

                <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $reg_course->is_complete ? 'yes' : 'No' !!}</div>

                </td>
                <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $reg_course->is_paid ? 'yes' : 'No' !!}</div>

                </td>
                <td class="mypara">
                    @if ($reg_course->voucher_status == 'pending')


                        <span class="badge bg-info btn-danger ">
                            Pending</span>


                    @elseif($reg_course->voucher_status == 'requested')
                        <a href="{{ asset('admin/report/user/voucher/' . $reg_course->id) }}">
                            <span class="badge bg-info btn-primary ">
                                Requested
                            </span>
                        </a>

                    @else
                        <span class="badge bg-info btn-success ">
                            Accepted</span>
                    @endif

                </td>
                <td class="mypara">
                    @if ($reg_course->certificate_status == 'pending')


                        <span class="badge bg-info btn-danger ">
                            Pending</span>

                    @elseif($reg_course->certificate_status == 'requested')
                        <a href="" data-toggle="modal" hit_method="get"
                            hit_url="{{ url('/admin/report/user/certificate/' . $reg_course->id) }}"
                            name="activate_delete_link" data-target=".delete" modal_heading="Alert"
                            modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-primary ">
                                Requested</span></a>

                    @else
                        <span class="badge bg-info btn-success ">
                            Accepted
                        </span>
                    @endif

                </td>
                <td class="mypara">
                    @if ($reg_course->badge_status == 'pending')


                        <span class="badge bg-info btn-danger ">
                            Pending</span>

                    @elseif($reg_course->badge_status == 'requested')

                        <a href="" data-toggle="modal" hit_method="get"
                            hit_url="{{ url('/admin/report/user/badge/' . $reg_course->id) }}" name="activate_delete_link"
                            data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-primary ">
                                Requested</span>
                        </a>
                    @else
                        <span class="badge bg-info btn-success ">
                            Accepted
                        </span>
                    @endif

                </td>

            </tr>

    </tbody>



    @section('pagination')
        <span class="pagination pagination-md pull-right">{!! $register_course->render() !!}</span>

    @endsection




    @endforeach
@stop
