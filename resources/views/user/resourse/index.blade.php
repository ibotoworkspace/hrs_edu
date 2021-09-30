@extends('user.layouts.index')

<link href="{{asset('css/resourse.css')}}" rel="stylesheet">
<link href="{{asset('css/blogpage.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">

@section('default')

<style>

</style>

<section>
    <title>
    RESOURCE CENTER
    </title>
    <div class="resourcebanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="resourcebannerdata">
                        <h2>RESOURCE CENTER</h2>
                        <h3><span class="resspan">THE</span> HRS ACADEMY BLOG</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="blogbackages">

        @foreach ($blogpage as $key=> $b)
        @if($key%2 == 0)
        <div class="row pararowUU">
            <div class="col-sm-6">
                <div class="blogdataimgop">
                    <img src="{{$b->avatar}}" class="img-responsive">
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
                    <img src="{{$b->avatar}}" class="img-responsive">
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
</section>





@endsection
