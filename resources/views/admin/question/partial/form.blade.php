

<link href="{{asset('css/multiple.css')}}" rel="stylesheet">
<div class="form-group">
    {!! Form::label('question', 'Question') !!}
    <div>
        {!! Form::text('question', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Question', 'required', 'maxlength' => '100']) !!}
    </div>
    <input type="hidden" name="test_id" value="{!! $test_id !!}">
</div>


<div class="form-group">
    {!! Form::label('question_type', 'Question Type') !!}
    <div>
        {!!Form::select('question_type',['single'=>'Single Choice','multiple'=>'Muliple Choice'],null,
        ['class'=>'form-group', 'class'=>'form-control','onchange'=>'select_question_type()'])!!}
        
    </div>
</div> 



<div class="form-group">
    {!! Form::label('Correct Choice', 'Correct Choice') !!}
    <div class="err_corect_choice"></div>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select class="form-control">
                <option >Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>

     
        <div id="checkboxes">
            <?php 
            if($quiz->question_type == 'single'){
                $question_type = 'radio';
            }
            else{ // multiple
                $question_type = 'checkbox';
            }
        ?>
            @if ($quiz->choice)
            @foreach ($quiz->choice as $key => $ch)
            <?php $is_checked = '';
                if($ch->is_correct){
                    $is_checked = 'checked';
                }
            ?>
            <div class="multiChoice">
                <label for="correct_choice_"{!!($key+1)!!}>
                    <input type="{!!$question_type !!}" {!!$is_checked!!} name="correct_choice[]" id="correct_choice_"{!!($key+1)!!} value="" />Choice # {!!($key+1)!!}
                </label>
            </div>

            @endforeach
            @endif
        </div>
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
            {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onclick' => 'return validateForm();']) !!}
        </div>
    </div>
</div>

@section('app_jquery')

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        function validateForm() {
            var checkedboxes = $('.multiChoice :checkbox:checked').length > 0;
            var err = 'Please select correct choice';
            if(checkedboxes){
                return  true;
            }
            $('.err_corect_choice').html(err);
            return  false;
        }



        function addChoice() {
            var nextdivnum = $('.add').length + 1;
            console.log('sfdffff', nextdivnum)
            $('.choice-file').append(radioBtnHtml(nextdivnum));
            // $('#correct-choice').append(optionHtml(nextdivnum));
            $('#checkboxes').append(optionMultiCheck(nextdivnum));
        }

        function radioBtnHtml(nextdivnum) {
            return `<div class="choice-input">
                        <lable>Choice # ` + nextdivnum + `</lable>
                        <input type="text" class="add form-control" required name="choices[]" style="margin-top: 10px; margin-bottom: 5px;">
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
            $('.multiChoice:last').remove();
        }

        function select_question_type(){
            $('.choice-input').remove();
            $('.multiChoice').remove();
        }

        function optionMultiCheck(nextdivnum){
            var question_type = $('#question_type').val();
            var type = 'checkbox';
            if(question_type == 'single'){
                type = 'radio';
            }

            return `
                    <div class="multiChoice">
                    <label for="correct_choice_`+nextdivnum+`">
                        <input type="`+type+`" name="correct_choice[]" id="correct_choice_`+nextdivnum+`" value="`+nextdivnum+`" />Choice #`+nextdivnum+`
                    </label>
                    </div>`
                    ;
        }

        function optionHtml(no) {
            return `
                    <option class ="option-file" value="` + no + `">Choice # ` + no + `</option>
                    `
        }

        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }

    </script>


@endsection
