
<div class="row">


    <div class="col-sm-4">
 <div class="maincourse">
 Promo Code Title
 </div>
   </div>
 
 
 <div class="col-sm-6">
 <div class="maininput">
  <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" placeholder="Enter Promo Code Title">
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
  <input type="number" class="form-control" id="exampleInputEmail1" name="percentage" aria-describedby="emailHelp" placeholder="Enter Promo Code Percentage">
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
  <input type="text" class="form-control" id="exampleInputEmail1"   name="code"  aria-describedby="emailHelp" placeholder="Enter Promo Code">
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
 <textarea class="ckeditor form-control"  id="summary-ckeditor" name="Description"></textarea> 
 </div>
 </div>
 </div>
 
 
  
  <div class="row">
 
 <div class="col-sm-4">
 <div class="maincourse">
 Promo Code Validity
 </div>
 </div>
 
 
 <div class="col-sm-6">
 <div class="maininput">
 <input type="number" class="form-control" id="exampleInputEmail1" name="validity" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
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
 <input type="number" class="form-control" id="exampleInputEmail1" name="usedtimes" aria-describedby="emailHelp" placeholder="Enter Use Times">
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
 <input type="text" class="form-control" id="exampleInputEmail1" name="active" aria-describedby="emailHelp" placeholder="YES">
 </div>
 {{-- <div class="commonbtn"><button type="button" class="btn btn-primary " id="mycomonbtn">submit</button></div> --}}
 </div>
 
 
  </div>  
 
  
 
 
 

        <div class="col-md-5 pull-left commonbtn">
            <div class="form-group text-center">
                <div id="mycomonbtn">
                    {!!Form::submit('Save',
                    ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!}
                </div>
            </div>
        </div>

        @section('app_jquery')
        <script>
            function validateForm(){
        return true;
    }

    

        </script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        @endsection
