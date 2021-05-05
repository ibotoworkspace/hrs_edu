@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/test.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">
<?php $test_id = $questions[0]->test_id ?? 0; ?>
@section('default')
    <div class="w3-main mainContent" style="margin-left:250px">
        <section>
            <div class="serchsite">
                <div class="container">
                    <div class="col-sm-06">
                        <form action="{{ url('student/course/test/save') }}" method="POST">
                            @csrf
                            <?php $display = 'display:block'; ?>
                            @foreach ($questions as $key => $ques)
                                <div class="all_questions question_{!! $key + 1 !!}" style="{!! $display !!}">
                                    <div>
                                        <h2>Question {!! $key + 1 !!}</h2>
                                        <p>{!! $ques->question !!}</p>
                                    </div>
                                    <div class="choices">
                                        <input name="question[]" value="{!! $ques->id !!}" hidden>
                                        <input name="test_id" value="{!! $test_id !!}" hidden>
                                        @foreach ($ques->choice as $choice)
                                            <div class="radio">
                                                <label><input type={!! $ques->question_type == 'single' ? 'radio' : 'checkbox' !!}
                                                        name="answer[{!! $key !!}][]"
                                                        value="{{ $choice->id }}">{{ $choice->choice }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <?php $display = 'display:none'; ?>
                            @endforeach
                            <div class="action">
                                <button class="btn btn-info" onclick="return next_button(-1);">Pre Button</button>


                                <button class="btn btn-info next-btn" onclick="return next_button(1);">Next Button</button>

                                <button class="btn btn-primary submit-btn" style="display: none"
                                    type="submit">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </div>


    <script>
        var step_num = 1;
        var last_step = parseInt('{!! sizeof($questions) !!}');

        function next_button(step) {
            step_num = step_num + step;
            console.log(' step', step_num)
            if (step_num < 1) {
                step_num = 1;
                return false;
            } else if (step_num > last_step) {
                step_num = last_step;
                $('.next-btn').css('display', 'none');
                $('.submit-btn').css('display', 'flex');
                return false;
            }
            $('.next-btn').css('display', 'flex');
            $('.all_questions').css('display', 'none');

            $('.question_' + step_num).css('display', 'block');
            return false;
        }

    </script>
@endsection





