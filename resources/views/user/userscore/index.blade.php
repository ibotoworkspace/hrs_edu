@extends('user.layouts.index')

<link href="{{ asset('css/contactus.css') }}" rel="stylesheet">

@section('default')

    <section>

        <head>
            <title>Contact-US</title>
        </head>
        <div class="contactarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactareadata">
                            <div>
                                <h2>User score</h2>
                            </div>

                        </div>
                    </div>
                </div>
                @foreach ($userscore as $uc)
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="contactform">
                                <div class="form-group">
                                    {!! Form::label('total', 'Total') !!}
                                    <input type="number" class="form-control myformdata" id="GnTtotal" value={!! $uc->total
                                    !!} placeholder="Enter Total" name="total">
                                </div>
                                <div class="form-group">
                                    {!! Form::label('correct number', 'Correct Number') !!}
                                    <input type="number" class="form-control myformdata" id="GnTcorrect" value={!!
                                        $uc->correct !!} placeholder="Enter correct number" name="correct">
                                </div>
                                <div class="form-group">
                                    {!! Form::label('percentage', 'Percentage') !!}
                                    <input type="number" class="form-control myformdata" value={!! $uc->percentage !!}
                                    id="GnTpercentage" placeholder="Enter percentage" name="percentage">
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>



@endsection
