<?php

$heading = 'Add Voucher'; ?>
@extends('layouts.default_edit')
@section('heading')
    {!! $heading !!}
@endsection
@section('leftsideform')

    {!! Form::open(['id' => 'my_form', 'method' => 'POST', 'route' => ['admin.voucher.save'], 'files' => true]) !!}

    @include('report.voucher.partial.form')
    {!! Form::close() !!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'url' => ['admin/report/user/voucher/save' . $reg_course]]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!! Form::close() !!}
