<div class="row">




    <div class="col-sm-4">
        <div class="maincourse">
            Lecturer Name
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <input type="text" class="form-control" id="name" name="name" value="{{$lecture->user->name ?? ''}}" aria-describedby="emailHelp"
                placeholder="Enter name here ....." required>
        </div>
    </div>


</div>


<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Lecturer Email
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <input type="email" class="form-control" id="email" value="{{$lecture->user->email ?? ''}}" name="email"
                aria-describedby="emailHelp" placeholder="Enter email here ..." required>
        </div>
    </div>


</div>


<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            About You Details
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <textarea class="ckeditor form-control" id="summary-ckeditor" name="description" required>{{$lecture->details ?? ''}}</textarea>
        </div>
    </div>
</div>

<div class="row">
<div class="form-group">
    <div class="col-sm-4">
        <div class="maincourse">
    {!! Form::label('userpassword','Password') !!}
        </div>
    </div>
        </div>
        <div class="col-sm-6">
            <div class="maininput">
        {!! Form::password('password',['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Enter Lecturer Password','id'=>'myInput',
        'maxlength'=>"100"]) !!}
    </div>
</div>

</div>
<div class="row">
    <div class="col-sm-12">
<div class="form-group">
    <div class="maincourse">


    <input type="checkbox" onclick="myFunction()">Show Password
    </div>
</div>
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

        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

    </script>


    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection
