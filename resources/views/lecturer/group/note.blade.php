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
                            <h3>{{ $group->name }} Notes</h3>
                        </div>
                    </div>
                    <div class="alert alert-success alert-block success-modal" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id="suc-msg">{{ $message ?? '' }}</strong>
                    </div>
                    <form action="{{ asset('lecturer/group/savenotes') }}" method="post">
                        @csrf
                        <div class="row courseside">
                            <div class="col-sm-12">
                                <div class="coursesidedata">
                                    <input name="group_id" id="group_id" value="{{ $group->id }}" hidden />
                                    <div class="coursesidedata">

                                        <div>
                                            <textarea class="ckeditor form-control" id="notes" name="notes" rows="40"
                                                cols="50">{!! $group->notes !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>

    </div>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('notes', {
            width: '100%',
            height: 700
        });

    </script>


@endsection
