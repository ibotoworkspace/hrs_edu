<div class="form-group">

    {!! Form::label('name', 'Name') !!}
    <div>
        {!! Form::text('name', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Name', 'required', 'maxlength' => '100']) !!}
    </div>
</div>


<div class="form-group">
    <label>Assignable</label>
    <select class="form-control" name="is_assignable">
        {{-- <option selected>is_assignable</option> --}}
        <option value="1">Yes </option>
        <option value="0">No </option>

    </select>

</div>

<div class="form-group">
    {!! Form::label('courses', 'Courses') !!}
    <div>
        {!! Form::select('courses_id', $courses, null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'courses', 'required', 'maxlength' => '100']) !!}
    </div>
</div>

<span id="err" class="error-product"></span>


<div class="form-group col-md-12">
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

@endsection
