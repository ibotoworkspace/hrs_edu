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
                    <div class="row pararow">
                        <div class="col-sm-6">
                            <div class="blogdata">
                                <p>Article | Dec 14, 2020</p>
                                <h3>Investing in Behavioral Development</h3>
                                <h5>As one starts climbing the career ladder, complexity
                                    increases. You have to manage the dynamics, build
                                    relationships, manage teams. All these things are
                                    going to be taxing for someone who is no...
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdataimg">
                                <img src="{{asset('images/fds.jpg')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>

                    <div class="row pararow">
                        <div class="col-sm-6">
                            <div class="blogdataimg">
                                <img src="{{asset('images/fsf.jpg')}}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="blogdatas">
                                <p>Article | Dec 15, 2020</p>
                                <h3>What Skill Development Really Means <br> and Why It’s Important for Success</h3>
                                <h5>Skill development is no longer a matter of choice. It is
                                    imperative to adapt, survive and succeed. We work in
                                    an era where dealing with ambiguity and disruptive
                                    trends are pivo...
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
