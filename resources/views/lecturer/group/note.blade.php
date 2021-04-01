@extends('lecturer.layouts.index')

<link href="{{ asset('css/submitrequest.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')





    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                {{-- My Groups --}}
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                 <textarea class="ckeditor form-control" id="notes" name="notes">{!! $group->notes !!}</textarea>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row subrow">
                        <div class="col-sm-12">
                            <h3>My Groups</h3>
                        </div>
                    </div>
                    <div class="alert alert-success alert-block success-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="suc-msg">{{ $message ?? '' }}</strong>
                    </div>
                    <div class="row courseside">
                        <div class="col-sm-12">
                            <div class="coursesidedata">

                                <div class="coursesidedata">

                                    <div>
                                        <textarea class="ckeditor form-control" id="overview" name="overview"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


@endsection
