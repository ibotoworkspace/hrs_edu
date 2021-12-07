<div class="row">


    <div class="col-sm-4">
        <div class="maincourse">
            Blog Title
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                aria-describedby="emailHelp" placeholder="Enter blog Title">
        </div>
    </div> --}}
    <div class="col-sm-6">

        <div class="maininput">

        <div>
            {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Enter title', 'required', 'maxlength' => '100']) !!}
        </div>


</div>
    </div>
</div>





<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Description
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <textarea class="ckeditor form-control" id="summary-ckeditor" name="description"></textarea>
        </div>
    </div> --}}
    <div class="col-sm-6">

        <div class="maininput">

        <div>
            {!! Form::textarea('description', null, ['class' => 'ckeditor form-control' , 'id'=>'summary-ckeditor', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Enter title', 'required', 'maxlength' => '100']) !!}
        </div>


</div>
    </div>
</div>
<?php
$avatar = asset('images/learning.jpg');
if(isset($blog)){
if($blog->avatar){

    $avatar = $blog->avatar;

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












    <div class="row">
        <div class="form-group">

            <div class="form-group pull-right">
                <img width="100px" src="{!! $avatar !!}" class="show-product-img imgshow">
            </div>


            <div class="col-sm-4">
                <div class="maincourse">
                    Upload Image
                </div>
            </div>
            <div class="col-sm-6">

                {!! Form::file('avatar', ['class' => 'choose-image', 'id' => 'avatar', 'required' ]) !!}
                <p class="help-block" id="error">Limit 2MB</p>
            </div>
            </div>

        </div>
    @include('admin.courses.partial.image_modal')

    <span id="err" class="error-product"></span>





      <div class="form-group col-md-12">
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
