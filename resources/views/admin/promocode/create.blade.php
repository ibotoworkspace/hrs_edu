<?php
if($control == 'edit'){
    $heading = 'Edit';
}
else{
    $heading = 'Add';
}
?>
@extends('layouts.default_edit')
@section('heading')
    {!! $heading !!}
@endsection
@section('leftsideform')
    @if($control == 'edit')
    {{-- {{dd($courses)}} --}}
        {!! Form::model($promocode,['id'=>'my_form', 'method' => 'POST', 'route' =>
                  ['promocode.update', $promocode->id],'files'=>true]) !!}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['promocode.save' ], 'files'=>true]) !!}
    @endif

    
    @include('admin.promocode.partial.form')
    {!!Form::close()!!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'route' => ['admin.promocode']]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!!Form::close()!!}




