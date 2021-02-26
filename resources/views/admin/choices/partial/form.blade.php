<div class="form-group">
    {!! Form::label('question', 'Question') !!}
    <div>
        {!! Form::text('question', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Question', 'required', 'maxlength' => '100']) !!}
    </div>

</div>
<div class="form-group">

    <div class="form-group">
        <label for="correct-choice">Select Correct Choice</label>
        <select  class="form-control" id="correct-choice" name="correct-choice">

        </select>
    </div>
</div>

<div class="form-group">

    <div class="form-group">
        <div>
            <input type="button" value="+ Add choice" class="btn-info" onclick="addChoice();">
            <input type="button" value="Remove Choice" class="btn-danger" onclick="removeChoice();">
        </div>
    </div>
</div>

<div class="choice-div">
    
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












<div class="col-md-5 pull-left">
    <div class="form-group text-center">
        <div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onblur' => 'return validateForm();']) !!}
        </div>
    </div>
</div>









@section('app_jquery')
    <script>
        $(function() {
            $('img').on('click', function(e) {
                var my_url = $(this).attr('src');
                $('#modal_img').attr('src', my_url);
            });
        });

        function addChoice() {
            $('.choice-div').append(choiceHtml());
            var no_of_choices = $('.choice-file').length;
            $('#correct-choice').append(optionHtml(no_of_choices));
        }

        function removeChoice() {
            console.log('length', $('.choice-file').length);
            if ($('.choice-file').length < 2) {
                return;
            }
            $('.choice-file:last').remove();
        }

        function choiceHtml() {
            return `
                            <div class="form-group choice-file">
                        {!! Form::label('choice', 'Choice') !!}
                        <div>

                            <input name="choice" id="choice" class="form-control" placeholder="Enete choice">

                        </div>

                    </div>
                                    `
        }
        function optionHtml(no){
            return `
            <option value="`+no+`">Coice# `+no+`</option>
            `
        }

        function validateForm() {
            return true;
        }

    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection
