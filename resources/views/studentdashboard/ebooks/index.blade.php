@extends('studentdashboard.layouts.index')

<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">
<link href="{{ asset('css/ebooks.css') }}" rel="stylesheet">




@section('default')






    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                HRS ACADEMY-EBOOKS
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

                    <div class="row bookrow">
                        <div class="col-sm-12">
                            <h3>HRS ACADEMY - EBOOKS</h3>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @foreach ($course_pdf as $c_pdf)
                        {{-- @endif --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('images/mypdf.png') }}" class="img-responsive">
                                <p>{{ $c_pdf->title }}</p>
                            </div>
                            {{-- @if (isset($c_pdf->requestCourse->can_download) && $c_pdf->requestCourse->can_download == 1) --}}

                            <div class="col-sm-6">
                                @if (isset($c_pdf->requestCourse->can_download) && $c_pdf->requestCourse->can_download == 1)
                                    <button type="button" class="btn btn-primary down"><i
                                            class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button>
                                        @else
                                        <button type="button" class="btn btn-primary for">Request for Download</button>

                                @endif
                            </div>
{{-- 
                            <div class="col-sm-4">
                                @if (isset($c_pdf->requestCourse->can_download) && $c_pdf->requestCourse->can_download == 0)
                                    <button type="button" class="btn btn-primary for">Request for Download</button>
                                    @else
                                @endif
                            </div> --}}

                        </div>
                    @endforeach
                    <div class="row pdfback">

                    </div>

                    <div class="col-sm-4">
                        <div class="pdfdown">

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>





    </div>



@endsection
