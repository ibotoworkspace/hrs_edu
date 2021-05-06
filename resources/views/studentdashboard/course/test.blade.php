@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/test.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">

@section('default')
<div class="w3-main mainContent" style="margin-left:250px">
    <section>
        <div class="serchsite">
            <div class="container-fluid">
                {{-- {{dd($questions)}} --}}
                @foreach ($questions as $ques )


                <div class="question_">
                    <div>
                        <h2>Question </h2>
                        <p>s dfsdfs dfsdf sdfsdfsdf sdf</p>
                    </div>

                    <div class="radio">
                        <label><input type="radio" name="optradio" checked>Option 1</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Option 2</label>
                    </div>
                    <div class="radio disabled">
                        <label><input type="radio" name="optradio">Option 3</label>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>


<script>

</script>
@endsection
