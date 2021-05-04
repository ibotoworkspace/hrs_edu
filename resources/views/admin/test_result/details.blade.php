@extends('layouts.default_module')
@section('module_name')
{{-- {!!$user->test->name!!} --}}
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
                <div class="bestcourse"> User Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse"> User Score</div>
            </th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $key => $u)

        <tr class="myarrow myarrow_{{$u->id}}">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $u->user->name !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $u->score !!}</div>
                </td>

           
 @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $user->render() !!}</span>
@endsection







@stop
