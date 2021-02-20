<div class="form-group">
  
    {!! Form::label('title','Title') !!}
    <div>
        {!! Form::text('title', null, ['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Title','required',
        'maxlength'=>"100"]) !!}
    </div>



    <div class="form-group">
  
        {!! Form::label('hours','Hours') !!}
        <div>
            {!! Form::number('hours', null, ['class' => 'form-control',
            'data-parsley-required'=>'true',
            'data-parsley-trigger'=>'change',
            'placeholder'=>'Hours','required',
            'maxlength'=>"100"]) !!}
        </div>

    </div>


    <div class="form-group">
  
        {!! Form::label('lectures','Lectures') !!}
        <div>
            {!! Form::number('lectures', null, ['class' => 'form-control',
            'data-parsley-required'=>'true',
            'data-parsley-trigger'=>'change',
            'placeholder'=>'Lectures','required',
            'maxlength'=>"100"]) !!}
        </div>

    </div>



    {{-- <div class="form-group">
        {!! Form::label('detail','Detail') !!}
        <div>
            {!! Form::textarea('detail', null, ['class' => 'ckeditor form-control',
             'id'=>'summary-ckeditor'
            // 'data-parsley-required'=>'true',
            // 'data-parsley-trigger'=>'change',
             'name'=>'summary-ckeditor',
            'placeholder'=>'Detail','required',
            'maxlength'=>"100"]) !!}

        </div>
        </div> --}}
    

          <div class="form-group">
        {!! Form::label('detail','Detail') !!}
        <div>
            <textarea class="ckeditor form-control"  id="summary-ckeditor" name="detail" ></textarea> 
            </div>
          </div>
        
            




        <?php

$avatar =  asset('images/courses1.png');

if(isset($courses)){

    if($courses->avatar){
        $avatar = $courses->avatar;
    }
}
?>

        <div class="form-group">

            <div class="form-group pull-right">
                <img width="100px" src="{!! $avatar !!}"class="show-product-img imgshow">
            </div>

            <div class="form-group">
                {!! Form::label('avatar','Image') !!}
                {!! Form::file('avatar', ['class' => 'choose-image', 'id'=>'avatar'] ) !!}
                <p class="help-block" id="error">Limit 2MB</p>
            </div>

        </div>
        @include('admin.courses.partial.image_modal')

        <span id="err" class="error-product"></span>


        <div class="form-group col-md-12">
        </div>
  

        <div class="form-group">
            {!! Form::label('requirments','Requirments') !!}
            <div>
                <textarea class="ckeditor form-control"  id="summary-ckeditor" name="requirments" ></textarea> 
                </div>
              </div>
{{--      
              <div class="form-group">
                {!! Form::label('downloadurl','Downloadurl') !!}
                <div>
  
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="downloadurl">
         </div> 
              </div> --}}

<?php

$images =  asset('images/courses2.png');

if(isset($courses)){

    if($courses->download_pdf){
        $images = $courses->download_pdf;
    }
}
?>
            
                    <div class="form-group">
            
                        <div class="form-group pull-right">
                            <img width="100px" src="{!! $images !!}"class="show-product-img imgshow">
                        </div>
            
                        <div class="form-group">
                            {!! Form::label('images','Image') !!}
                            {!! Form::file('images', ['class' => 'choose-image', 'id'=>'images'] ) !!}
                            <p class="help-block" id="error">Limit 2MB</p>
                        </div>
            
                    </div>
        <!-- <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> -->

  {{-- <div class="form-group">
        {!! Form::label('download url','Download Url') !!}
        <div>
            {!! Form::file('downloadurl', null, ['class' => 'form-control-file',
             'id'=>'exampleFormControlFile1'
            'data-parsley-required'=>'true',
            'data-parsley-trigger'=>'change',
            'placeholder'=>'download Url','required',
            'maxlength'=>"100"]) !!}

        </div>
        </div> --}}




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
