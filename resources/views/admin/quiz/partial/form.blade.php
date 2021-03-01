<div class="form-group">

    {!! Form::label('question','Question') !!}
    <div>
        {!! Form::text('question', null, ['class' => 'form-control',
        'data-parsley-required'=>'true',
        'data-parsley-trigger'=>'change',
        'placeholder'=>'Question','required',
        'maxlength'=>"100"]) !!}
    </div>

{{-- {{dd($quiz)}} --}}


    <div>
        <span class="input-group-btn">
            <button type="button" class="btn btn-primary" onclick="addcoice()">Add Choice</button>
            <button type="button" class="btn btn-danger" onclick="removeChoice()">Remove Choice</button>
        </span>
        <div class="radioBtn">
            <div class="dummy">
                <label for="">Choice</label>
                <input type="text" class="add form-control" name="1" style="margin-top: 10px; margin-bottom: 5px;">
            </div>
        </div>
    </div>
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
        function validateForm() {
            return true;
        }

        function addcoice() {
            console.log('sfkhgyjutftjgfjg')

            var nextdivnum = $('.add').length + 1;
            console.log('sfdffff', nextdivnum)
            $('.radioBtn').append(radioBtnHtml(nextdivnum));
        }

        function radioBtnHtml(nextdivnum) {
            return `<div class="dummy">
            <lable>Choice</lable>
            <input type="text" class="add form-control" name="`+nextdivnum+`" style="margin-top: 10px; margin-bottom: 5px;">
            </div>
        `
        }
        function removeChoice(){
        console.log('length',$('.dummy').length);
        if($('.dummy').length<2){
            return;
        }
        $('.dummy:last').remove();
    }
    </script>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>






    @endsection