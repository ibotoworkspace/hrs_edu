@extends('studentdashboard.layouts.index')

<link href="{{asset('css/courseregistration.css')}}" rel="stylesheet">
<link href="{{asset('css/mainstudentdash.css')}}" rel="stylesheet">



@section('default')


     {{-- {{ dd($courses)}} --}}

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main mainContent" style="margin-left:250px">



<section>
            <title>
                REGISTRATION
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

                    <div class="row courseregarea">
                        <div class="col-sm-12">
                            <div class="courseregareadata">
                                <h3>COURSE REGISTRATION</h3>
                            </div>
                        </div>
                    </div>
 
                    <div class="row courselectarea">
                        <div class="col-sm-12">

                            <form method="post" action="{{ url('/student/myregstration') }}">
                                {{ csrf_field() }}
                            <div class="courselectareadata row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Courses*</label>
                                <div class="col-sm-10">
                                    <select class="form-control nowpoint" id="exampleFormControlSelect1" name="coursedropper">
                                        <option>Choose..</option>
                                        @foreach($courses as $c)
                                        <option name="coursedrop">{{ $c->title }}</option>
                                        @endforeach
                                       
                                        {{-- {{ dd('userlist->name')}} --}}
                                        {{-- <input type="hidden" name="user_id" value="{!!$userlist->id!!}}"> --}}

                                       {{-- {{ dd($userlist->name)}} --}}
                                    </select>
                                    {{-- <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary" value="save" />
                                    </div> --}}
                                    
                                </div>
                            </div>
                            
                            <div class="courselectclick">
                               <button type="submit" class="btn btn-primary applynow">APPLY NOW</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>




</div>

    @endsection