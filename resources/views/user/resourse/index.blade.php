@extends('user.layouts.index')

<link href="{{asset('css/resourse.css')}}" rel="stylesheet">
@section('default')

<style>
.resourcebanner {
    background-image:url({{asset('images/rbanner.jpg')}}) ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
    padding: 100px 10px;
}
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
    <div class="investingbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="investingbannerdata">
                        <h4>Article | Dec 14, 2020</h4>
                        <h3>Investing in Behavioral Development</h3>
                        <p>As one starts climbing the career ladder, complexity increases. You have to manage the dynamics, build
                            relationships, manage teams. All these things are going to be taxing for someone who is no...
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="investingbannerimg">
                        <img src="{{asset('images/resourcea.jpg')}}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="developmentbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="developmentbannerimg">
                        <img src="{{asset('images/resourceb.jpg')}}" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="developmentbannerdata">
                        <h4>Article | Dec 15, 2020</h4>
                        <h3>What Skill Development Really Means <br> and Why It’s Important for Success</h3>
                        <p>Skill development is no longer a matter of choice. It is imperative to adapt, survive and succeed. We work in
                            an era where dealing with ambiguity and disruptive trends are pivo...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
