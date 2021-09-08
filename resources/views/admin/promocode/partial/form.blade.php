{{-- <div class="form-group">

    {!! Form::label('title', 'Title') !!}
    <div>
        {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Title', 'required', 'maxlength' => '100']) !!}
    </div> --}}
   <?php
   use Illuminate\Support\Carbon;

   ?>

<div class="row">


    <div class="col-sm-4">
        <div class="maincourse">
            Promo Code Title
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp"
                placeholder="Enter Promo Code Title">
        </div>
    </div> --}}
  <div class="form-group">

    

  <div class="col-sm-6">
 
        <div class="maininput">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Title', 'required', 'maxlength' => '100']) !!}
    </div> 
        </div>
    </div> 
   


</div>


<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Promo Code Percentage
        </div>
    </div>
    

      <div class="col-sm-6">
 
        <div class="maininput">
            {!! Form::number('percentage', null, ['class' => 'form-control',  'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'percentage', 'required', 'maxlength' => '100']) !!}
    </div> 
        </div>
   




</div>




<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Promo Code
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <input type="text" class="form-control" id="exampleInputEmail1" name="code" aria-describedby="emailHelp"
                placeholder="Enter Promo Code">
        </div>
    </div> --}}
         <div class="col-sm-6">
 
        <div class="maininput">
            {!! Form::text('code', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'code', 'required', 'maxlength' => '100']) !!}
    </div> 
        </div>


</div>


<div class="row">

    {{-- <div class="col-sm-4">
        <div class="maincourse">
            Description
        </div>
    </div>


    <div class="col-sm-6">
        <div class="maininput">
            <textarea class="ckeditor form-control" id="summary-ckeditor" name="Description"></textarea>
        </div>
    </div> --}}

    
</div>
<?php
     
//dd($new_date); 
  
    ?>



<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Promo Code Validity
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <input type="date" class="form-control" id="exampleInputEmail1" name="validity"
                aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
        </div>
    </div> --}}
    {{-- {!!dd($newdate)!!}  $new_date ?? --}}
    
          <div class="col-sm-6">


 
        <div class="maininput">
         {{-- <div class="maininput"> --}}
            {!! Form::date('validity', $new_date ??'', ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change',  'required', 'maxlength' => '100']) !!}
    </div> 
        </div>


</div>

<div class="row">

    <div class="col-sm-4">
        <div class="maincourse">
            Promo Code Use Time
        </div>
    </div>


    {{-- <div class="col-sm-6">
        <div class="maininput">
            <input type="number" class="form-control" id="exampleInputEmail1" name="usedtimes"
                aria-describedby="emailHelp" placeholder="Enter Use Times">
        </div>
    </div> --}}

           <div class="col-sm-6">
 
        <div class="maininput">
            {!! Form::number('used_times', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Enter Use Times', 'required', 'maxlength' => '100']) !!}
    </div> 
        </div>


</div>





<div class="row">
<?php

    $is_active = '';
    // dd($courses);
    if (isset($promocode)) {
    if ($promocode->is_active) {
        $is_active = 'checked';

    }
    }
    ?>
    <div class="col-sm-4">
        <div class="maincourse">
            Is Active
        </div>
    </div>
      <div class="col-sm-6">
    <div class="form-check">
    
       <input type="checkbox" name="is_active" {!!$is_active!!} value="1" class="form-check-input">
       
       
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

    </script>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection
