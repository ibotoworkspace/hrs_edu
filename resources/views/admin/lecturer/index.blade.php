@extends('layouts.default_module')
@section('module_name')
    List of Lecturer
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['lecturer.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}







@section('table')
    {{-- {!! Form::open(['method' => 'get', 'route' => ['courses.search'], 'files' => true]) !!}
    @include('admin.courses.partial.searchfilters')
    {!! Form::close() !!} --}}

    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/lecturer/excel') }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/lecturer/csv') }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/lecturer/pdf') }}"
                style="color: #fff">PDF</a> </button>
    </div>



    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">S. No.</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Name</div>
            </th>

            <th class="option">
                <div class="bestoption">Email</div>

            </th>

            <th class="option">
                <div class="bestoption">Approval </div>

            </th>


            <th class="option">
                <div class="">Option</div>

            </th>

        </tr>
    </thead>
    <tbody>

        @foreach ($lecturer as $key => $l)

            <tr class="myarrow myarrow_{{ $l->id }}">
                <td class="mynbr">
                    <div class="bestnbr" name="sno"> {{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $l->user->name !!}</div>
                </td>

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $l->user->email !!}</div>
                </td>
                <td class="hrs">
                    @if ($l->is_approve == 0)
                        {{-- <a href="{{ asset('admin/lecturer/approval/' . $l->id) }}">
                            <span class="btn-danger">Pending</span>
                        </a> --}}
                        <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{ $l->id }}"
                            hit_url="{{ url('/admin/lecturer/approval/' . $l->id) }}" name="activate_delete_link"
                            data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-danger ">Pending</span></a>
                    @else
                        {{-- <a href="{{ asset('admin/lecturer/link/' . $l->id) }}"> --}}
                        <span class="badge bg-info btn-success">Approve</span>
                        {{-- </a> --}}
                    @endif

                </td>

                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/lecturer/edit/' . $l->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get"
                                        remove_parent="myarrow_{{ $l->id }}"
                                        hit_url="{{ url('/admin/lecturer/delete/' . $l->id) }}"
                                        name="activate_delete_link" data-target=".delete" modal_heading="Alert"
                                        modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $l->deleted_at ? 'Activate' : 'Delete' !!}</span></a>
                                </li>
                            </ul>

                        </div>
                        <i class="fa fa-cog settings" aria-hidden="true"></i>

                    </div>
                </td>
            </tr>
            </tr>

        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $lecturer->render() !!}</span>
@endsection

@stop
