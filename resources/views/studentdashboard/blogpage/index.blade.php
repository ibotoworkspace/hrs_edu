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
                {{-- <div class="row serchbox">
                    <div class="col-sm-12">
                        <div class="serchsitedata">
                            <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                placeholder="Serch here...">
                        </div>
                    </div>
                </div> --}}

                <div class="row blogrow">
                    <div class="col-sm-12">
                        <h3 class="hrs">THE HRS ACADEMY - BLOG</h3>
                    </div>
                </div>

                <div class="blogbackages">

                    @foreach ($blogpage as $key=> $b)
<?php
$avatar = asset('images/learning.jpg');
if(isset($b)){
if($b->avatar){

    $avatar = $b->avatar;

}


}




?>
                    @if($key%2 == 0)
                    <div class="row pararowUU">
                        <div class="col-sm-6">
                            <div class="blogdataimgop">
                                <img src="{{$avatar}}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdatao">
                                <h3 class="myh33"> {{ucwords($b->title)}}   </h3>
                            <p class="blackpara">
                                    {!! strlen($b->description) < 500 ? $b->description : substr($b->description, 0, 500).'...'!!}
                            </p>

                                    <a href="{{ url('/student/read/' . $b->id) }}"   type="button" onclick="myFunction()" id="myBtnero">Read more</a>
                                    {{-- <button type="button" class="btn btn-primary portal">Logout</button> --}}

                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row pararowUUwhite">
                        <div class="col-sm-6">
                            <div class="blogdataimgop">
                                <img src="{{$avatar}}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdatao">
                                <h3 class="myh33"> {{ucwords($b->title)}}   </h3>
                                <p class="blackpara">
                                    {!! strlen($b->description) < 500 ? $b->description : substr($b->description, 0, 500).'...'!!}
                                </p>

                                    <a href="{{ url('/student/read/' . $b->id) }}"   type="button" onclick="myFunction()" id="myBtnerowhu">Read more</a>


                            </div>
                        </div>
                    </div>

                    @endif

                    @endforeach
                    <span class="pagination my pagination-md pull-right">{!! $blogpage->render() !!}</span>




                </div>

            </div>

        </div>
        {{-- <span class="pagination my pagination-md pull-right">{!! $blogpage->render() !!}</span> --}}

</section>
{{-- <span class="pagination my pagination-md pull-right">{!! $blogpage->render() !!}</span> --}}

    @endsection



    @section('app_jquery')

<script>


    </script>


    @endsection
