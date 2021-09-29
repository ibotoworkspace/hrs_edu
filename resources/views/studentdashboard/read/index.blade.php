@extends('studentdashboard.layouts.index')

<link href="{{asset('css/blogpage.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')




<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">




    <section>
        <title>
            BLOG
        </title>
        <div class="serchsite">
            <div class="container-fluid">
                <div class="row serchbox">
                    <div class="col-sm-12">
                        <div class="serchsitedata">
                            <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                placeholder="Serch here...">
                        </div>
                    </div>
                </div>

                <div class="row blogrow">
                    <div class="col-sm-12">
                        <h3>THE HRS ACADEMY - BLOG</h3>
                    </div>
                </div>

                <div class="blogbackER">


                    @foreach ($blogpageread as $key=> $b)

                    <div class="row pararow ppp">

                        <div class="col-sm-6">
                            <div class="blogdata">

                                <h5>
                                 {!! $b->description!!}


                                </h5>
                            </div>
                        </div>

                    <div class="col-sm-6">
                        <div class="blogdataimg">
                            <img src="{{$b->avatar}}" class="img-responsive">
                        </div>
                    </div>
                    </div>


                    @endforeach


                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('app_jquery')

<script>


    </script>


    @endsection
