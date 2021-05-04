@extends('layouts.default_module')
@section('module_name')
    Test
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['test.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}







@section('table')
    {!! Form::open(['method' => 'get', 'route' => ['admin.test'], 'files' => true]) !!}
    @include('admin.test.partial.searchfilters')
    {!! Form::close() !!}

    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/excel') }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/csv') }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/course/pdf') }}"
                style="color: #fff">PDF</a> </button>
    </div>



    <thead>
        <tr>

            <th class="mycourse">
                <div class="bestcourse"> Name</div>
            </th>
            <th class="option">
                <div class="bestoption"> Assignable</div>

            </th>
            <th class="option">
                <div class="bestoption">Action</div>

            </th>
            <th class="option">
                <div class="bestoption">Test Assigned</div>

            </th>
            <th class="option">
                <div class="bestoption">Option</div>

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($test as $key => $t)

        <tr class="myarrow myarrow_{{$t->id}}">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $t->name !!}</div>
                </td>
                @if ($t->is_assignable == '1')
                    <td class="mynbr">
                        <div class="bestnbr" name="hours">TRUE</div>
                    </td>
                @else
                    <td class="mynbr">
                        <div class="bestnbr" name="hours">FALSE</div>
                    </td>
                @endif

                <td class="myquizerr">
                    {{-- <div class="quizes"><button type="button" class="btn btn-primary onquizes" id="myquizes">{!! $crs->detail !!}</button></div> --}}
                    <a href="{{ url('/admin/question/' . $t->id) }}" type="button" class="btn btn-primary onquizes"
                        id="myvide"> Questions</a>
                </td>
                <td class="myquizerr">
                    {{-- <div class="quizes"><button type="button" class="btn btn-primary onquizes" id="myquizes">{!! $crs->detail !!}</button></div> --}}
                    <a href="{{ url('/admin/test_assigned/' . $t->id) }}" type="button" class="btn btn-primary onquizes"
                        id="myvide"> Test_Assigned</a>
                </td>

                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/test/edit/' . $t->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$t->id}}"
                                        hit_url="{{ url('/admin/test/delete/' . $t->id) }}" name="activate_delete_link"
                                        data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $t->deleted_at ? 'Activate' : 'Delete' !!}</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <i class="fa fa-cog settings" aria-hidden="true"></i>

                    </div>
                </td>
            </tr>













        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $test->render() !!}</span>
@endsection







@stop
