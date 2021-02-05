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
    {{-- {!! $course->title !!} --}}
@endsection
@section('leftsideform')
        {{-- edit form hit --}}
    @if($control == 'edit')
        {!! Form::model($coursesvideos,['id'=>'my_form', 'method' => 'POST', 'route' =>
                  ['coursesvideos.update', $coursesvideos->id],'files'=>true]) !!}
                

                  {{-- add form hit --}}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['coursesvideos.save'], 'files'=>true]) !!}
    @endif

    {{-- /////create controller form and edit controller form--}}
    @include('admin.coursesvideos.partial.form')
    {!!Form::close()!!}


    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'route' => ['coursesvideos.index']]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
{!!Form::close()!!}




