
@extends('user.layouts.index')

@section('default')
    <section>
        <div class="InnerSlider">
            <img src="{{asset('images/businessslider.jpg')}}" class="img-responsive">
            <div class="innserSliderText">
                <h1>Checkout our New Collection</h1>
            </div>
        </div>
    </section>
    <section>
    {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['searchProducts' ], 'files'=>true]) !!}
        <div class="searchArea">
            <div class="container">
                <div class="col-sm-8 col-sm-offset-2">
                
                    <div class="searchForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" id="search" name="search">
                        </div>
                        {!!Form::submit('Search',['class'=>'btn btn-primary btnSearch'])!!}
                    </div>
                   
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </section>

    <section>



        <div class="innerPageBusiness">
            <section id="carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 " style="min-height:600px;">
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="20000">
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>

                                </ol>

                                <div class="carousel-inner">
                                @foreach($product as $key=>$p)
                                
                                    <div class="item testimonials {!!$key === 0 ? 'active':'' !!}">
                                    @foreach($p as $sp)
                                        <div class="col-sm-6">

                                            <div class="row productBox">
                                                <div class="col-sm-4">
                                                    <img src=" {!! $sp->image!!}" class="img-responsive">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="productName">
                                                        {!! $sp->name_en!!}
                                                    </div>
                                                    <div class="FProductsStars">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="productsDesc">
                                                        {!!$sp->details!!}
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        @endforeach   
                                    </div>
                               
                                    @endforeach
                                   
                                    <a class="left carousel-control" href="#fade-quote-carousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#fade-quote-carousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
{{-----------------Home Page --------------}}
