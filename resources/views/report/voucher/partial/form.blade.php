<div class="form-group">

    {{-- {!! Form::label('title', 'Add Voucher') !!}
    <div>
        {!! Form::text('voucher', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Enter Voucher', 'required', 'maxlength' => '100']) !!}
    </div> --}}

    {!! Form::label('Upload voucher', 'Upload Voucher') !!}
    <div>
        <input type="file" class="form-control-file" name="voucher_file" id="exampleFormControlFile1">
    </div>




    <input type="hidden" name="reg_course_id" value="{!! $reg_course !!}">

    <input type="hidden" name="user_id" value="{!! $user_id !!}">






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
