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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row subrow">
                        <div class="col-sm-12">
                            <h3>{{ $group->name }} Class Link</h3>
                        </div>
                    </div>
                    <div class="alert alert-success alert-block success-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="suc-msg">{{ $message ?? '' }}</strong>
                    </div>
                    <form action="{{ asset('lecturer/group/savelink') }}" method="post">
                        @csrf
                        <div class="row courseside">
                            <div class="col-sm-12">
                                <div class="coursesidedata">
                                    <input name="group_id" id="group_id" value="{{ $group->id }}" hidden />
                                    <div class="coursesidedata">

                                        <div>
                                            <input class="ckeditor form-control" id="link" name="link"
                                                value="{!! $group->class_link !!}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12">
                                <button type="submit" class="btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


@endsection
