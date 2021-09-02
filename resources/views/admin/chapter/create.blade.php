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
        {!! Form::model($chapter,['id'=>'my_form', 'method' => 'POST', 'route' =>
                  ['chapter.update', $chapter->id],'files'=>true]) !!}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['chapter.save' ], 'files'=>true]) !!}
    @endif
    @include('admin.chapter.partial.form')
    {!!Form::close()!!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <?php
                $course_id =  $courses->id ?? $chapter->course_id ;
                ?>
            <div>
                {!! Form::open(['method' => 'get', 'url' => ['admin/chapter/'.$course_id ]]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!!Form::close()!!}




