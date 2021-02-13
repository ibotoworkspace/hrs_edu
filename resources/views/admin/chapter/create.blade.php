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
        {!! Form::model($chapter,['id'=>'my_form', 'method' => 'POST', 'route' =>
                  ['chapter.update', $chapter->id],'files'=>true]) !!}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['chapter.save' ], 'files'=>true]) !!}
    @endif
    @include('admin.chapter.partial.form')
    {!!Form::close()!!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {{-- {{dd($courses->id)}} --}}
                {!! Form::open(['method' => 'get', 'url' => ['admin/chapter/'.$courses->id]]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!!Form::close()!!}




