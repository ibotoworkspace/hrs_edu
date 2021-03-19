@extends('layouts.default_module')
@section('module_name')
    List of Skill Development Advisor
@stop




@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}



@section('table')
    {!! Form::open(['method' => 'get', 'url' => ['admin/advisor'], 'files' => true]) !!}
    @include('admin.advisor.partial.searchfilters')
    {!! Form::close() !!}


    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">S.No.</div>
            </th>
            <th class="myso">
                <div class="bestcso">Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Email</div>
            </th>
            </th>
            <th class="option">
                <div class="bestoption">Phone No</div>

            </th>
            <th class="option">
                <div class="bestoption">Status</div>

            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($advisor as $key => $ad)

            <tr class="myarrow">

                <td class="hrs">
                    <div class="besthrs" name="title">{!! $key + 1 !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="title">{!! $ad->name !!}</div>
                </td>

                <td class="myquiz">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ad->email !!}</div>
                </td>

                <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ad->phone_no !!}</div>

                </td>
                <td class="mypara">
                    @if ($ad->status == 'pending')

                        <a href="" data-toggle="modal" hit_method="get"
                            hit_url="{{ url('/admin/advisorstatus/' . $ad->id) }}" name="activate_delete_link"
                            data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-danger ">
                                Pending</span></a>


                    @else
                        <span class="badge bg-info btn-primary ">
                            Approve
                        </span>
                    @endif

                </td>

            </tr>






    </tbody>



    @section('pagination')
        <span class="pagination pagination-md pull-right">{!! $advisor->render() !!}</span>

    @endsection




    @endforeach
@stop
