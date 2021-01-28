@extends('user.layouts.index')



<link href="{{asset('css/careerjobs.css')}}" rel="stylesheet">
<!-- {{asset('images/headerimage.png')}}" -->
@section('default')

<section>
    <title>
    CAREER AND JOBS
    </title>
    <div class="careerjobsarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="careerjobheading">
                        <h2>CAREER AND JOBS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="careerjobsback">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="careerjobsdata">
                        <h3>CURRENT VACANCIES</h3>                        
                    </div>                    
                </div>
            </div>
            <div class="row toprow">
                <a href="http://localhost/hrs_backend/designer.php"><div class="col-sm-4">
                    <div class="careerjobbox">
                        <div class="careerjobboxhead">
                            <h4>GRAPHIC DESIGNER</h4>
                        </div>      
                        <div class="careerjobboximg">
                            <img src=" {{asset('images/graphicdesigner.png')}}" class="img-responsive">
                           
                        </div>      
                        <div class="careerjobboxdata">
                            <ul>
                                <li>Experience Required : 2 to 3 years</li>
                                <li>Location : Bernardino CA 92410 USA</li>
                                <li>Shift : Morning</li>
                            </ul>
                        </div>      
                    </div>                    
                </div></a>
                <a href="http://localhost/hrs_backend/phpdeveloper.php"><div class="col-sm-4">
                    <div class="careerjobbox">
                        <div class="careerjobboxhead">
                            <h4>PHP DEVELOPER</h4>
                        </div>      
                        <div class="careerjobboximg">
                            <img src=" {{asset('images/graphicdesigners.png')}}" class="img-responsive">
                        </div>      
                        <div class="careerjobboxdata">
                            <ul>
                                <li>Experience Required : 2 to 3 years</li>
                                <li>Location : Bernardino CA 92410 USA</li>
                                <li>Shift : Morning</li>
                            </ul>
                        </div>      
                    </div>                    
                </div></a>
                <a href="http://localhost/hrs_backend/contentwriter.php"><div class="col-sm-4">
                    <div class="careerjobbox">
                        <div class="careerjobboxhead">
                            <h4>CONTENT WRITER</h4>
                        </div>      
                        <div class="careerjobboximg">
                            <img src=" {{asset('images/graphicdesigne.png')}}" class="img-responsive">
                        </div>      
                        <div class="careerjobboxdata">
                            <ul class="jobtop">
                                <li>Experience Required : 2 to 3 years</li>
                                <li>Location : Bernardino CA 92410 USA</li>
                                <li>Shift : Morning</li>
                            </ul>
                        </div>      
                    </div>                    
                </div></a>
            </div>
        </div>
    </div>
</section>
@endsection