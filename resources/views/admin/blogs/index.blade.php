@extends('layouts.default_module')
@section('module_name')
    Blogs
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['addblog.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}







@section('table')
    {{-- {!! Form::open(['method' => 'get', 'route' => ['admin.test'], 'files' => true]) !!}
    @include('admin.test.partial.searchfilters')
    {!! Form::close() !!} --}}

 {{-- <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/excel') }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/csv') }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/course/pdf') }}"
                style="color: #fff">PDF</a> </button>
    </div> --}}



    <thead>
        <tr>

            <th class="mycourse">
                <div class="bestcourse"> Blog Title</div>
            </th>
            <th class="option">
                <div class="bestoption"> Blog  Description</div>

            </th>
            <th class="option">
                <div class="bestoption">Option</div>

            </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($blog as $key => $t)

        <tr class="myarrow myarrow_{{$t->id}}">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! ucwords($t->title) !!}</div>
                </td>

                    <td class="mynbr">
                        <div class="bestnbr" name="hours">{!! ucwords($t->description) !!}</div>
                    </td>
                    {{-- <div class="bestnbr" name="hours">TRUE</div> --}}




                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button  class="fa fa-cog settings" aria-hidden="true" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/addblog/edit/' . $t->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$t->id}}"
                                        hit_url="{{ url('/admin/addblog/delete/' . $t->id) }}" name="activate_delete_link"
                                        data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $t->deleted_at ? 'Activate' : 'Delete' !!}</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </td>
            </tr>













        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $blog->render() !!}</span>
@endsection







@stop
