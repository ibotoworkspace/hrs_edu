<div class="form-group">
    {!! Form::label('question','Question') !!}
    <div>
        {!! Form::text('question', null, ['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Question','required',
        'maxlength'=>"100"]) !!}
    </div>
    <input type="hidden" name="course_id" value="{!!$course_id!!}">
{{-- {{dd($quizes)}} --}}
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

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        @endsection
