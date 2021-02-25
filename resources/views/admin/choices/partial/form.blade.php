

<div class="form-group">
    {!! Form::label('question','Question') !!}
    <div>
        {!! Form::text('question', null, ['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Question','required',
        'maxlength'=>"100"]) !!}
    </div>
    
</div>

{{-- <div class="form-group">
    {!! Form::label('correctchoice','CorrectChoice') !!}
    <div>
        {!! Form::select('correctchoice', null, ['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Question','required',
        'maxlength'=>"100"]) !!}
    </div>
    
</div> --}}





<div class="form-group">

    <div class="form-group">
        <div>
            <input type="button" value="+ADD choice" class="btn-info" onclick="addchoice();">
            {{-- <input type="button" value="RemoveColor" class="btn-danger" onclick="removeColor();"> --}}
        </div>
    </div>
</div>


{{-- <div class="form-group">
    <div class="form-group color-div">

        @if(isset($product))
        @foreach($product->colors as $key=>$color)
        @include('Admin.Products.partial.color',['key'=>$key,'color'=>$color])
        @endforeach
        @else
        <div class="color-file">
            <div class="form-group pull-right">
                <img width="100px" src="{!! $avatar !!}" class="show-product-img" data-toggle="modal" data-target=".imagemodal">
            </div>
            <input type="text" placeholder="Color" class="boxsize" name="color_name[]" required>
            <input type="number" placeholder="Quantity" class="boxsize" name="quantity[]" required>

            
            <input type="file" class="boxclick" name="color_file[]" onchange="imagelimit(this)" required>
            <p class="help-block" id="error">Limit 2MB</p>
        </div>
        @endif

    </div>
</div> --}}
{{-- @include('Admin.Products.partial.image_modal')

<span id="err" class="error-product"></span>


<div class="form-group col-md-12">
</div> --}}



<div class="col-md-5 pull-left">
    <div class="form-group text-center">
        <div>
            {!!Form::submit('Save',
            ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!}
        </div>
    </div>
</div>

@section('app_jquery')
<script>
    $(function() {
        $('img').on('click', function (e) {
            var my_url = $(this).attr('src');
            $('#modal_img').attr('src', my_url);
        });
    });
    function addColor(){
        $('.color-div').append(colorhtml());
    }
    function removeColor(){
        console.log('length',$('.color-file').length);
        if($('.color-file').length<2){
            return;
        }
        $('.color-file:last').remove();
    }
    function colorhtml(){
        return `<div class="color-file">
        
            <input type="text" placeholder="Color" name="color_name[]" required>
            <input type="number" placeholder="Quantity" name="quantity[]" required>
            <input type="file" name="color_file[]" onchange="imagelimit(this)">
            <p class="help-block" id="error">Limit 2MB</p>
        </div>`;
    }
    function validateForm(){
        return true;
    }
</script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection













  


   

      

        {{-- @section('app_jquery')
        <script>
            function validateForm(){
        return true;
    }

    

        </script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        @endsection --}}
