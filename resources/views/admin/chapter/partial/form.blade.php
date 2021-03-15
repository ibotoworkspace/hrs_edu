<div class="form-group">

    {!! Form::label('title', 'Title') !!}
    <div>
        {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Title', 'required', 'maxlength' => '100']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        <div>
            <textarea class="ckeditor form-control" id="summary-ckeditor" name="description"></textarea>
        </div>
    </div>
    {{-- <div class="form-group">
  
        {!! Form::label('paid','Paid') !!}
        <div>
            {!! Form::select('paid', null, ['class' => 'form-control',
            'data-parsley-required'=>'true',
            'data-parsley-trigger'=>'change',
            'placeholder'=>'paid','required',
            'maxlength'=>"100"]) !!}
        </div>

    </div> --}}
    {{-- <div class="form-group">
        {!! Form::label('paid', 'Is Paid') !!}
        <div>
            <select id="select-example" class="form-control" name="paid" placeholder="Select paid...">

                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <div class="form-group">
                {!! Form::label('level', 'Level') !!}
                <div>
                    <select id="select-example" class="form-control" name="level" placeholder="Select level...">

                        <option value="beginner">beginner</option>
                        <option value="intermediate">intermediate</option>
                        <option value="expert">expert</option>
                    </select>
                   


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



        <input type="hidden" name="course_id" value="{!! $courses->id !!}">






                    {{-- <div class="form-group">
                {!! Form::label('downloadurl','Downloadurl') !!}
                <div>
  
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="downloadurl">
         </div> 

            
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
                                {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onblur' => 'return validateForm();']) !!}
                            </div>
                        </div>
                    </div>

                    @section('app_jquery')
                        <script>
                            function validateForm() {
                                return true;
                            }

                        </script>

                        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

                    @endsection
