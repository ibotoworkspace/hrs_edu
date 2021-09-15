<style>
    .multiselect {
        width: 200px;
    }

    .selectBox {
        position: relative;
    }

    .selectBox select {
        width: 100%;
        font-weight: bold;
    }

    .overSelect {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }

    #checkboxes label {
        display: block;
    }

    #checkboxes label:hover {
        background-color: #1e90ff;
    }

</style>

<div class="form-group">

    {!! Form::label('Group Name', 'Group Name') !!}
    <div>
        {!! Form::select('group_id',$group,null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Select Group Name', 'required', 'maxlength' => '100']) !!}
    </div>

</div>
<div class="form-group">
    <?php
        $start_date = '';
        $start_time = '';
        if(isset($test_assigned)){
            $start_date_time = $test_assigned->start_date_time;
            $start_date = date("Y-m-d", $start_date_time);
            $start_time = date("H:i", $start_date_time);
        }
    ?>
    {!! Form::label('startdate', 'Start Test Date') !!}
    <div>
        {!! Form::date('start_date', $start_date , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Select Start Test Date', 'required', 'maxlength' => '100']) !!}
    </div>

</div>
<div class="form-group">

    {!! Form::label('starttime', 'Start Test time') !!}
    <div>
        {!! Form::time('start_time', $start_time, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Select Start Test Time', 'required', 'maxlength' => '100']) !!}
    </div>

</div>

<div class="form-group">

    {!! Form::label('testduration', 'Test Duration Minutes') !!}
    <div>
        {!! Form::number('test_duration', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => ' Select Test Duration Minutes', 'required', 'maxlength' => '100']) !!}
    </div>
</div>


</div>
<input type="hidden" name="test_id" value="{!! $test_id !!}">

{{-- <div class="form-group">
    {!! Form::label('courses', 'Courses') !!}
    <div>
        {!! Form::select('courses_id', $courses, null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'courses', 'required', 'maxlength' => '100']) !!}
    </div>
</div> --}}

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
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <!-- jQuery library -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

    <!-- JS & CSS library of MultiSelect plugin -->
    <script src="multiselect/jquery.multiselect.js"></script>
    <link rel="stylesheet" href="multiselect/jquery.multiselect.css">


    <script>
        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }

    </script>

@endsection
