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
<?php
$paid = '';
if(isset($courses)){
if($courses->is_paid){

    $paid = $courses->is_paid;

}


}




?>

    {{-- <div class="form-group">

        <select class="form-control" name="product_id">
            <option>Select Item</option>
            @foreach ($items as $key => $value)
            <option value="1">1</option>
            <option value="0">0</option>
                    {{ $value }}
                </option>
            @endforeach
        </select>

    </div> --}}

    {!! Form::label('is_paid', 'Is Paid') !!}
    <div class="form-group">
        {!! Form::select('is_paid', array('1' => 'True', '0' => 'False'), null,['çlass'=>'form-control']); !!}

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

    <?php
    $avatar = asset('images/courses1.png');
    $popular_check = '';
    // dd($courses);
    if (isset($courses)) {
    if ($courses->is_popular) {
        $popular_check = 'checked';

    }
    }
    ?>

    <div class="form-check">
        <input type="checkbox" name="is_popular" {!!$popular_check!!} value="1" class="form-check-input">
        <label class="form-check-label" for="exampleCheck1"> Popular Courses</label>
    </div>

      <div class="form-group col-md-12">
    </div>

    <div class="form-group">
        {!! Form::label('overview', 'Overview') !!}
        <div>
            <textarea class="ckeditor form-control" id="overview" name="overview">{!! $courses->overview ??'' !!}</textarea>
        </div>
    </div>
    {{-- <div class="form-group">
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
    </div> --}}


    {{-- <div class="form-group">

        {!! Form::label('pdf url', 'PDF Url') !!}
        <div>
            {!! Form::text('pdf_url', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'PDF Url']) !!}
        </div>

    </div> --}}


    <div class="form-group">
        {!! Form::label('learningpath', 'Learning Path') !!}
        <div>
            <textarea class="ckeditor form-control" id="learning_path"
                name="learning_path">{!! $courses->learning_path ??'' !!}</textarea>
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
