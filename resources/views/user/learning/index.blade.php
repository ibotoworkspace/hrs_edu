@extends('user.layouts.index')

<link href="{{asset('css/learning.css')}}" rel="stylesheet">
@section('default')







<section>
    <title>
    LEARNING MANAGEMENT
    </title>
    <div class="learningtop">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="learningdata">
                        <h1>LEARNING MANAGEMENT SYSTEM</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="learningarea">
        <div class="container">            
            <div class="row">
                <div class="col-sm-12">
                    <div class="learningtwo">
                        <h2>LEARNING MANAGEMENT SYSTEM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="learningtwodata">
                        <p>HRS Academy offers learning management system platform which provide learners with the 
                            opportunity to learn anytime and anywhere at their pace.
                        </p>
                    </div>
                    <div class="learningtwodataclick">
                        <a href="{{asset('user/courses')}}"><button type="button" class="btn btn-primary allcourses">VIEW ALL COURSES</button></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="learningtwodataimg">
                        <img src="{{asset('images/learning.jpg')}}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection