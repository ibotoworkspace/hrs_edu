@extends('layouts.default_module')
@section('module_name')
    Test Result
@stop

{{-- @section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['test.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop --}}



@section('table-properties')
    width="400px" style="table-layout:fixed;"
  







@section('table')
    {{-- {!! Form::open(['method' => 'get', 'route' => ['admin.test'], 'files' => true]) !!}
    @include('admin.test.partial.searchfilters')
    {!! Form::close() !!} --}}

  



    <thead>
        <tr>

            <th class="mycourse">
                <div class="bestcourse"> Test</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse"> Details</div>
            </th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($test_result as $key => $t)

        <tr class="myarrow myarrow_{{$t->id}}">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $t->name !!}</div>
                </td>
             

                <td class="myquizerr">
                    {{-- <div class="quizes"><button type="button" class="btn btn-primary onquizes" id="myquizes">{!! $crs->detail !!}</button></div> --}}
                    <a href="{{ url('/admin/test_result/details/' . $t->id) }}" type="button" class="btn btn-primary onquizes"
                        id="myvide"> details</a>
                </td>
 @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $test_result->render() !!}</span>
@endsection







@stop
