<div class="form-group">
    {!! Form::label('question', 'Question') !!}
    <div>
        {!! Form::text('question', $quiz->question, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Question', 'required', 'maxlength' => '100']) !!}
    </div>
    <input type="hidden" name="course_id" value="{!! $course_id !!}">
</div>
<div class="form-group">

    <div class="form-group">
        <label for="correct-choice">Select Correct Choice</label>
        <select class="form-control" id="correct-choice" name="correct_choice">
            @if ($quiz->choice)
                @foreach ($quiz->choice as $key => $ch)
                    <option class="option-file" value="{{ $key + 1 }}">Choice # {{ $key + 1 }}</option>
                @endforeach
            @endif
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
<div>

    <div class="choice-file">
        <div class="choice-input">
            @if ($quiz->choice)
                @foreach ($quiz->choice as $key => $ch)
                    <lable>Choice # {{ $key + 1 }}</lable>
                    <input type="text" class="add form-control" name="choices[]" value="{{ $ch->choice }}"
                        style="margin-top: 10px; margin-bottom: 5px;">
                @endforeach
            @endif
        </div>
    </div>
</div>


<div class="col-md-5 pull-left">
    <div class="form-group text-center">
        <div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onblur' => 'return validateForm();']) !!}
        </div>
    </div>
</div>






@section('app_jquery')
    <script>
        function validateForm() {
            return true;
        }


        function addChoice() {
            var nextdivnum = $('.add').length + 1;
            console.log('sfdffff', nextdivnum)
            $('.choice-file').append(radioBtnHtml(nextdivnum));
            $('#correct-choice').append(optionHtml(nextdivnum));
        }

        function radioBtnHtml(nextdivnum) {
            return `<div class="choice-input">
                                <lable>Choice # ` + nextdivnum + `</lable>
                                <input type="text" class="add form-control" name="choices[]" style="margin-top: 10px; margin-bottom: 5px;">
                                </div>
                            `
        }

        function removeChoice() {
            console.log('length', $('.choice-input').length);
            if ($('.choice-input').length < 2) {
                return;
            }
            $('.choice-input:last').remove();
            $('.option-file:last').remove();
        }

        function optionHtml(no) {
            return `
                            <option class ="option-file" value="` + no + `">Choice # ` + no + `</option>
                            `
        }

    </script>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection
