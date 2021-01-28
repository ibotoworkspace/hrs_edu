
@extends('user.layouts.index')

@section('default')
    <section>
        <div class="mainImage">
            <img src="{{asset('images/sliderbanner.jpg')}}" class="img-responsive">
        </div>
    </section>
    <section>
        <div class="contentArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="imgContent">
                            <img src="{{asset('images/quote.png')}}" class="img-responsive">
                        </div>
                        <h1>Who are You ?</h1>
                        <p>Aalmi Majlis Tahaffuz Khatm-e-Nubuwwat is an international, religious.preaching and reform organization of Islamic Millat (Millat means a global Islamic nationality irrespective of geographical boundaries).</p>
                        <p>Aalmi Majlis Tahaffuz Khatm-e-Nubuwwat's positive and reformative mode of preaching and service, Qadianees and Lahories quit their previous repudiators and heretic beliefs and embraced Islam both inside Pakistan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="carousel" class="Businessarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Qadiani BUSINESS <span>INFORMATION</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="carousel slide" id="business-carousel" data-ride="carousel" data-interval="20000">
                        <ol class="carousel-indicators">
                            <li data-target="#business-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#business-carousel" data-slide-to="1"></li>
                            <li data-target="#business-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($company as $key=>$c)
                            <div class="item testimonials {!!$key === 0 ? 'active':'' !!}">
                                 @foreach($c as $co)
                                    <div class="col-sm-4">
                                        <div class="iconbox">
                                            <div class="iconImage">
                                                <img src="{{$co->image}}" class="img-responsive">
                                            </div>
                                            <div class="imagecontent">
                                               {{$co->name_en}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                               
                               
                                <a class="left carousel-control" href="#business-carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#business-carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <section id="carousel" class="FeatureProductsArea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>QADIANI FEATURE <span>PRODUCTS</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="carousel slide" id="FeatureProducts-carousel" data-ride="carousel" data-interval="20000">
                        <ol class="carousel-indicators">
                            <li data-target="#FeatureProducts-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#FeatureProducts-carousel" data-slide-to="1"></li>
                            <li data-target="#FeatureProducts-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        @foreach($product as $key=>$p)
                            
                            <div class="item testimonials {!!$key === 0 ? 'active':'' !!}">
                            @foreach($p as $sp)
                                <div class="col-sm-4">
                                    <div class="FProductsiconbox">
                                        <div class="FProductsiconImage">
                                            <img src="{!! $sp->image !!}" class="img-responsive">
                                        </div>
                                        <div class="FProductsimagecontent">
                                            <!-- Shan Chaki Atta -->
                                            {!! $sp->name_en!!}
                                        </div>
                                        <div class="FProductsStars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                        @endforeach
                            
                            </div>
                            <a class="left carousel-control" href="#FeatureProducts-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#FeatureProducts-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-----------------Home Page --------------}}