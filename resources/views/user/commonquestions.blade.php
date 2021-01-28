@extends('user.layouts.index')

@section('default')

    <section>
        <div class="innerPageFaqs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>frequently asked questions</h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            {{--{!! dd($faqs) !!}--}}
                            @foreach($faqs as $s)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{!! $s['id'] !!}collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {!! $s['question_en'] !!} <br/>
                                            {!! $s['question_ur'] !!}
                                        </a>
                                    </h4>
                                </div>
                                <div id="{!! $s['id'] !!}collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        {!! $s['answer_en'] !!}<br/>
                                        {!! $s['answer_ur'] !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <!-- <div class="askQuestionArea">
                            <button type="button" class="btn btn-primary btnFaq btn-lg" data-toggle="modal" data-target="#myModal">Have Some Questions ?</button>
                        </div> -->
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['askQuestion' ], 'files'=>true]) !!}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title">Have Some Questions</h2>
                                    </div>
                                    <div class="modal-body">

                                        <form>
                                            <div class="form-group formFaq">
                                                <i class="fa fa-user-o faqIcon" aria-hidden="true"></i>
                                                {!! Form::textarea('question_en',null, ['class' => 'form-control',
                                              'data-parsley-required'=>'true',
                                              'data-parsley-trigger'=>'change',
                                              'placeholder'=>'enter question in english','required',
                                              'maxlength'=>"250"]) !!}
                                            </div>
                                            <div class="form-group formFaq">
                                                <i class="fa fa-user-o faqIcon" aria-hidden="true"></i>

                                                {!! Form::textarea('question_ur',null, ['class' => 'form-control',
                                                    'data-parsley-required'=>'true',
                                                    'data-parsley-trigger'=>'change',
                                                    'placeholder'=>'enter question in urdu','required',
                                                    'maxlength'=>"250"]) !!}
                                            </div>
                                            <!-- {{--<div class="form-group formFaq">--}}
                                                {{--<i class="fa fa-user-o faqIcon" aria-hidden="true"></i>--}}
                                                {{--<textarea class="form-control" rows="5" id="comment"></textarea>--}}
                                            {{--</div>--}} -->
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        {!!Form::submit('Save',['class'=>'btn btn-primary btn-block btn-lg btn-parsley'])!!}
                                    </div>
                                </div>
                                {!!Form::close()!!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection