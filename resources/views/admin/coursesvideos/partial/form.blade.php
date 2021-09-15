   {{-- {{dd($courses)}}; --}}


<?php

$avatar =  asset('images/courses2.png');

if(isset($coursesvideos)){

    if($coursesvideos->url){
        $avatar = $coursesvideos->url;
    }
}
?>



    <div class="form-group">

        {!! Form::label('title','Title') !!}
        <div>
            {!! Form::text('title', null, ['class' => 'form-control',
            'data-parsley-required'=>'true',
            'data-parsley-trigger'=>'change',
            'placeholder'=>'title','required',
            'maxlength'=>"100"]) !!}
        </div>

    </div>


    <div class="form-group pull-right">
        <img width="100px" src="{!! $avatar !!}" class="show-product-img imgshow" data-toggle="modal" >
    </div>
    <input type="hidden" name="course_id" value="{!! $courses->id !!}">
    <div class="form-group">
        {!! Form::label('avatar','Video') !!}
        {!! Form::file('avatar', ['class' => 'choose-video', 'id'=>'avatar'] ) !!}
        <p class="help-block" id="error">Limit 2MB</p>
    </div>
    <div class="form-group">
        {!! Form::textarea('video_visible',null,['class'=>'form-control' ,
        'rows'=>'3','placeholder'=>'enter video URL',
        'maxlength'=>"225"]) !!}
        {!!Form::hidden('video')!!}

    </div>

@include('admin.coursesvideos.partial.image_modal')



        <div class="col-md-5 pull-left">
            <div class="form-group text-center">
                <div>
                    {!!Form::submit('Save',
                    ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!}
                </div>
            </div>
        </div>






        @section('app_jquery')

        <script>
            function validateForm(){
        return true;
    }
   </script>



        @endsection
