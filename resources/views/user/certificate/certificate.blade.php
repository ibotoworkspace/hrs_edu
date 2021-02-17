@extends('user.layouts.index')



<link href="{{asset('css/certificate.css')}}" rel="stylesheet">
<!-- {{asset('images/headerimage.png')}}" -->
@section('default')




<section>
    <div class="certificatetop">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="certificatetopdata">
                        <h1>CERTIFICATION & EXAM</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="certificatearea">
        <div class="container">            
            <div class="row">
                <div class="col-sm-12">
                    <div class="certificatetwo">
                        <h2>EXAM CENTER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="certificatetwodata">
                        <p>Training and development involves acquiring new skills set or improving on individual skills set. Proof of
                            such skills set require gaining certification that will make individual stands out and become valuable
                            asset to corporate organization.
                        </p>
                        <p>At HRS Academy , we offer world-class secure proctoring service on behalf of our technical partner
                            for certification exams.
                        </p>
                    </div>
                    <div class="certificatedataclick">
              <a href="{{asset('user/courses')}}"   type="button"  class="btn btn-primary viewall">VIEW ALL COURSES</a>
                        {{-- <button type="button" class="btn btn-primary viewall">VIEW ALL COURSES</button> --}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="certificateimg">
                        <img src="{{asset('images/certificate.jpg')}}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection