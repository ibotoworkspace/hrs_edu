<?php
if ($control == 'edit') {
$heading = 'Edit';
} else {
$heading = 'Add';
} ?>
@extends('layouts.default_edit')
@section('heading')
    {!! $heading !!}
@endsection
@section('leftsideform')
    @if ($control == 'edit')
        {{-- {{dd($courses)}} --}}
        {!! Form::model($ebooks, ['id' => 'my_form', 'method' => 'POST', 'route' => ['ebooks.update', $ebooks->id], 'files' => true]) !!}
    @else
        {!! Form::open(['id' => 'my_form', 'method' => 'POST', 'route' => ['ebooks.save'], 'files' => true]) !!}
    @endif


    @include('admin.ebooks.partial.form')
    {!! Form::close() !!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'route' => ['admin.ebooks']]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!! Form::close() !!}
