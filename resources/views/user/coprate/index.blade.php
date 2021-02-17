@extends('user.layouts.index')

<link href="{{asset('css/coprate.css')}}" rel="stylesheet">
@section('default')








<section>
    <title>
    CORPORATE TRAINING
    </title>
    <div class="copratearea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="coprateheading">
                        <h2>CORPORATE TRAINING</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="coprateback">
        <div class="container">            
            <div class="row">
                <div class="col-sm-12">
                    <div class="copratebackhead">
                        <h3>CORPORATE TRAINING</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="copratebackdata">
                        <p>HRS Academy offer customized corporate training
                            services to organizations to meet up their training
                            needs.
                        </p>
                        <p>HRS Academy customized enterprise training solution gives corporate managers the ability to manage
                            their learning programs and monitor the progress of
                            each participating staff.
                        </p>
                    </div>
                    <div class="copratebackclick">
                        <a href="{{asset('user/courses')}}"   type="button"  class="btn btn-primary viewall">VIEW ALL COURSES</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="copratebackimg">
                        <img src="{{asset('images/corporatetraining.jpg')}}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>















@endsection