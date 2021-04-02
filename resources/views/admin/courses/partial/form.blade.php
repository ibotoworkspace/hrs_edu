<div class="form-group">

    {!! Form::label('title', 'Title') !!}
    <div>
        {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Title', 'required', 'maxlength' => '100']) !!}
    </div>



    <div class="form-group">

        {!! Form::label('hours', 'Hours') !!}
        <div>
            {!! Form::number('hours', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Hours', 'required', 'maxlength' => '100']) !!}
        </div>

    </div>
    <div class="form-group">

        {!! Form::label('price', 'Price') !!}
        <div>
            {!! Form::number('price', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Price', 'required']) !!}
        </div>

    </div>
    <div class="form-group">
        {!! Form::label('Course Badge', 'Course Badge') !!}
        <div>

            <input type="file" class="form-control-file" id="downloadpdf" name="badge">
        </div>
    </div>




    <?php
    $avatar = asset('images/courses1.png');

    if (isset($courses)) {
    if ($courses->avatar) {
    $avatar = $courses->avatar;
    }
    }
    ?>

    <div class="form-group">

        <div class="form-group pull-right">
            <img width="100px" src="{!! $avatar !!}" class="show-product-img imgshow">
        </div>

        <div class="form-group">
            {!! Form::label('avatar', 'Image') !!}
            {!! Form::file('avatar', ['class' => 'choose-image', 'id' => 'avatar']) !!}
            <p class="help-block" id="error">Limit 2MB</p>
        </div>

    </div>
    @include('admin.courses.partial.image_modal')

    <span id="err" class="error-product"></span>


    <div class="form-group col-md-12">
    </div>

    <div class="form-group">
        {!! Form::label('overview', 'Overview') !!}
        <div>
            <textarea class="ckeditor form-control" id="overview" name="overview">{!! $courses->overview !!}</textarea>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('PDF File', 'PDF File') !!}
        <div>

            <input type="file" class="form-control-file" id="downloadpdf" name="downloadpdf">
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Book Cover Image', 'Book Cover Image') !!}
        <div>

            <input type="file" class="form-control-file" id="book_avatar" name="book_avatar">
        </div>
    </div>


    <div class="form-group">

        {!! Form::label('pdf url', 'PDF Url') !!}
        <div>
            {!! Form::text('pdf_url', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'PDF Url']) !!}
        </div>

    </div>


    <div class="form-group">
        {!! Form::label('learningpath', 'Learning Path') !!}
        <div>
            <textarea class="ckeditor form-control" id="learning_path"
                name="learning_path">{!! $courses->learning_path !!}</textarea>
        </div>
    </div>



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
