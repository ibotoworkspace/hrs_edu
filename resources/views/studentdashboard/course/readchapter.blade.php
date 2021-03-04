@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">
<link href="{{ asset('css/chapter.css') }}" rel="stylesheet">



@section('default')


    <div class="w3-main mainContent" style="margin-left:250px">



        <section>
            <div class="container-fluid dummydataarea">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dummydata">
                            <h2>{{$chapter->title}}</h2>
                            <p>
                                {!!$chapter->description !!}
                            </p>
                        </div>
                    </div>                  
                </div>
            </div>
        </section>


    @endsection
    