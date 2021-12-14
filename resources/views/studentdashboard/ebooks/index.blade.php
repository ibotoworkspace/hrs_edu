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
                        <form method="post" action="{{ url('student/search_course_library') }}">
                            {{ csrf_field() }}

                        <div class="col-sm-8">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here..." name="search_text" value="{{$search_text ?? ''}}">


                            </div>
                        </div>
                        <div class="col-sm-4">


                        <button type="submit" class="btn btn-primary applynowoo">Search Here</button>


                        </div>
                        </form>
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
                    @elseif($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="alert alert-danger alert-block error-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="err-msg">{{ $message }}</strong>
                    </div>
                    <div class="alert alert-success alert-block success-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="suc-msg">{{ $message }}</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="serchsitedata book">
                                {{-- <form action="{{ url('student/checkcode') }}" method="POST">
                                    @csrf --}}
                                <input type="text" name="code" class="form-control shdata" id="download-code"
                                    placeholder="Enter Code here...">
                                <button type="submit" onclick="getCode()" class="btn btn-primary bookclick"> Get
                                    Book </button>

                                    <div class="pdf-download">

                                    </div>
                                {{-- </form> --}}
                            </div>

                        </div>
                    </div>
                    @foreach ($course_pdf as $c_pdf)
                    <?php

// dd($c_pdf);



?>
                        {{-- @endif --}}
                        <div class="row">
                            <div class="myheader">
                            <div class="col-sm-5">
                                <?php $thumnail_book = '';?>
                                <img src="{!! $c_pdf->avatar ?? asset('images/mypdf.png') !!}" class="show-product-img img-responsive">
                                <p>{{ $c_pdf->name }}</p>
                            </div>
                            </div>
                            {{-- @if (isset($c_pdf->requestCourse->can_download) && $c_pdf->requestCourse->can_download == 1) --}}

                            <div class="col-sm-2">
                                {{-- @if (isset($c_pdf->requestCourse->can_download) && $c_pdf->requestCourse->can_download == 1)
                                    <button type="button" class="btn btn-primary down"><i
                                            class="fa fa-long-arrow-down arrow" aria-hidden="true"></i>Download</button>
                                @else --}}
                                <form method="post" action="{{ asset('student/downloadpdf') }}">
                                    @csrf()
                                    <input name="ebook_id" value="{{ $c_pdf->id }}" hidden>
                                    <button type="submit" class="btn btn-primary for">Request for Download</button>
                                    {{-- <button type="submit" class="btn btn-primary for">View</button> --}}
                                </form>



                                {{-- @endif --}}
                            </div>
                            <div class="col-sm-3">
                                {{-- <button type="submit" class="btn btn-primary for">View</button> --}}
                                {{-- <a href="" data-toggle="modal" name="activate_delete" data-target=".detail_{!!  $c_pdf->id !!}">
                                    <span  class="btn btn-primary for">
                                        View</span></a> --}}
                                {{-- @include('studentdashboard.ebooks.partial.pdf_modal',['video'=>$c_pdf]) --}}

                                <a href="{!!$c_pdf->book_url!!}#toolbar=0"  target="_blank">
                                    <span  class="btn btn-primary for">
                                        View</span></a>
                            </div>

                            {{-- <li>
                                <a style="flex: 1;"
                              href="https://www.comptia.org/"
                              style="margin-left: 100px" target="_blank">CompTIA

                          </a>
                          </li> --}}

                            {{-- <div class="col-sm-4">
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
                    {{-- <div class="pdf-download">

                    </div> --}}
                </div>
            </div>
    </div>
    </section>
    </div>

    <script>
        function getCode() {

            let _token = "{{ csrf_token() }}";
            let code = $('#download-code').val();
            console.log('code code', code);
            $.ajax({
                url: "{{ asset('student/checkcode') }}",
                type: "POST",
                data: {
                    code: code,
                    _token: _token
                },
                success: function(response) {
                    if (response.action == 'failed') {
                        $('.error-modal').css("display", "block")
                        $('.success-modal').css("display", "none")
                        $('#err-msg').html('Your code is invalid or expired !')
                    } else {
                        url = response.response.ebook.book_url
                        $('.success-modal').css("display", "block")
                        $('.error-modal').css("display", "none")
                        $('#suc-msg').html('Your PDF is Downloaded !')
                        // document.location.href = url;
                        $('.pdf-download').append(downloadPdfhtml(url));
                        console.log('pdf html ', downloadPdfhtml(url))
                        setTimeout(() => {
                                $('.download_link').trigger('click');
                        }, 2000);
                    }

                },
            });
        }
        // hrs-IdHksu0iBA

        function downloadPdfhtml(url) {
            return ` <a id='download_link' class=' btn btn-primary bookclick download_link' onclick="removeBtn(this)" href='` + url + `' download>
                                           Download </a>
                                        `
        }

        function removeBtn(e){
            setTimeout(function(){
                $('#download_link').remove();
            },2000)
        }

    </script>

@endsection
