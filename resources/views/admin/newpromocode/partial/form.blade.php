
@extends('layouts.default_module')
@section('module_name')
Add a New Promo Code


@stop

@section('table')



             

     
<div class="row">

   <div class="col-sm-4">
<div class="maincourse">
Promo Code Title
</div>
  </div>


<div class="col-sm-6">
<div class="maininput">
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Promo Code Title">
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
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Promo Code Percentage">
</div>
</div>


    </div>


 
  
<div class="row">

   <div class="col-sm-4">
<div class="maincourse">
Promo Code
</div>
  </div>


<div class="col-sm-6">
<div class="maininput">
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Promo Code">
</div>
</div>


    </div>


    <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Description
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<textarea class="ckeditor form-control"  id="summary-ckeditor" name="summary-ckeditor"></textarea> 
</div>
</div>
</div>


 
 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Promo Code Validit
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
</div>
</div>


 </div> 

 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Promo Code Use Time
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Use Times">
</div>
</div>


 </div>  

 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Is Active
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YES">
</div>
<div class="commonbtn"><button type="button" class="btn btn-primary " id="mycomonbtn">submit</button></div>
</div>


 </div>  

 


@section('app_jquery')
        
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        @endsection

        @stop