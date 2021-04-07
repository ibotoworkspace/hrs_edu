<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Chapter Title
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <input type="text" class="form-control" id="title" name="title" value="{{ $chapter->title ?? '' }}"
                aria-describedby="emailHelp" placeholder="Enter title here ....." required>
        </div>
    </div>


</div>




<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Chapter Description
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <textarea class="ckeditor form-control" id="summary-ckeditor" name="description"
                required>{{ $chapter->description ?? '' }}</textarea>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Total Lecture
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <input type="number" class="form-control" id="lecture" name="lecture" value="{{ $chapter->lecture ?? '' }}"
                aria-describedby="emailHelp" placeholder="Enter total lecture here">
        </div>
    </div>


</div>
<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Course Level
        </div>
    </div>


    <div class="col-sm-6">
        <select class="maininput form-control" name="level" id="level">
            <option value="basic">Basic</option>
            <option value="intermediate">Intermediate</option>
            <option value="advance">Advance</option>
        </select>
    </div>
</div>
<input name="course_id" value="{!! $courses->id ?? $chapter->course_id !!}" hidden />
<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            IS Paid
        </div>
    </div>


    <div class="col-sm-6">
        <select class="maininput form-control" name="is_paid" id="is_paid">
            <option value="1">True</option>
            <option value="0">False</option>
        </select>

    </div>
</div>





<div class="col-md-5 pull-left commonbtn">
    <div class="form-group text-center">
        <div id="mycomonbtn">
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
