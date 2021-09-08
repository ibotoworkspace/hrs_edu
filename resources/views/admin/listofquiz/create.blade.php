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
        {!! Form::model($quiz,['id'=>'my_form', 'method' => 'POST', 'route' =>
                  ['quizlist.update', $quiz->id],'files'=>true]) !!}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['quizlist.save' ], 'files'=>true]) !!}
    @endif
    @include('admin.listofquiz.partial.form')
    {!!Form::close()!!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'url' => ['admin/quizes/'.$course_id]]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!!Form::close()!!}




