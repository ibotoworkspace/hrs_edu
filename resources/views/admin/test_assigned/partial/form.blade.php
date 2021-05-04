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


{{-- <div class="form-group">
    {!! Form::label('test_id', 'Test Name') !!}
    <div>
        {!!Form::select('test_id',$test_id,null,
        ['class'=>'form-group', 'class'=>'form-control','onchange'=>'select_question_type()'])!!}
        
    </div>
</div>  --}}
<div class="form-group">
    {!! Form::label('name', 'Group Name') !!}
   
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select>
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">

            @foreach ($group as $key => $g)
         
        
                <label >
                    <input type="checkbox" value="{!! $key !!}" name="group[]" />
                    {!! $g !!}
                </label>
            @endforeach
        </div>
    </div>
    {{-- <div class="form-group">

        {!! Form::label('startdate', 'Start Date') !!}
        <div>
            {!! Form::date('start_date', isset($group) ? date('d-m-Y', $group->start_date) : '', ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Select Start Date', 'required', 'maxlength' => '100']) !!}
        </div>

    </div>

    <div class="form-group">

        {!! Form::label('enddate', 'End Date') !!}
        <div>
            {!! Form::date('end_date', isset($group) ? date('d-m-Y', $group->end_date) : '', ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'required']) !!}
        </div>

    </div>

 </div> --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

