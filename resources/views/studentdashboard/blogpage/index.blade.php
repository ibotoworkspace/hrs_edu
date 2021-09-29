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

                <div class="blogback">

                    @foreach ($blogpage as $key=> $b)
                    @if($key%2 == 0)
                    <div class="row pararow">

                        <div class="col-sm-6">
                            <div class="blogdata">
                                <h3> {{ucwords($b->title)}}   </h3>
                                {{-- <h3>Investing in Behavioral Development</h3> --}}
                                <h5>
                                 {!! strlen($b->description) < 500 ? $b->description : substr($b->description, 0, 500).'...'!!}

                                 <a href="{{ url('/student/read/' . $b->id) }}" type="button" onclick="myFunction()" id="myBtner">Read more</a>
                                 {{-- <button type="button" class="btn btn-primary portal">Logout</button> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdataimg">
                                <img src="{{$b->avatar}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row pararowUU">
                        <div class="col-sm-6">
                            <div class="blogdataimg">
                                <img src="{{$b->avatar}}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdatas">
                                <h3 class="myh33"> {{ucwords($b->title)}}   </h3>
                                <h5>
                                    {!! strlen($b->description) < 500 ? $b->description : substr($b->description, 0, 500).'...'!!}

                                    <a href="{{ url('/student/read/' . $b->id) }}"   type="button" onclick="myFunction()" id="myBtnero">Read more</a>
                                    {{-- <button type="button" class="btn btn-primary portal">Logout</button> --}}
                                   </h5>
                            </div>
                        </div>
                    </div>
                    @endif

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
