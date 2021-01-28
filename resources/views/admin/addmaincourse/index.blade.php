
@extends('layouts.default_module')
@section('module_name')
Add Main Course


@stop

@section('table')



             

     
<div class="row">

   <div class="col-sm-4">
<div class="maincourse">
   Main Course Title
</div>
  </div>


<div class="col-sm-6">
<div class="maininput">
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Course title">
</div>
</div>


    </div>
      

    <div class="row">

   <div class="col-sm-4">
<div class="maincourse">
Course Duration
</div>
  </div>


<div class="col-sm-6">
<div class="maininput">
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Courses Duration in Hour">
</div>
</div>


    </div>


 
  
<div class="row">

   <div class="col-sm-4">
<div class="maincourse">
Course Image
</div>
  </div>


<div class="col-sm-6">
<div class="mainfile">
<input class="choose-image" id="mycourse" name="avatar" type="file">
</div>
</div>


    </div>


    <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Mobile Upload Image
</div>
</div>


<div class="col-sm-6">
<div class="mainfile">
<input class="choose-image" id="avatar" name="avatar" type="file">
</div>
</div>


 </div>


 
 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Executable Course Name
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Execuatable Course Name">
</div>
</div>


 </div> 

 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Is Compiler
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YES">
</div>
</div>


 </div>  

 <div class="row">

<div class="col-sm-4">
<div class="maincourse">
Course Description
</div>
</div>


<div class="col-sm-6">
<div class="maininput">
<textarea class="ckeditor form-control"  id="summary-ckeditor" name="summary-ckeditor"></textarea> 
</div>
<div class="commonbtn"><button type="button" class="btn btn-primary " id="mycomonbtn">submit</button></div>
</div>


 </div>  

 


@section('app_jquery')
        
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        @endsection

        @stop