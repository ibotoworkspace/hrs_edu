@extends('layouts.default_module')
@section('module_name')
    Add Blog
@stop
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@section('table')
    <form action="{{ asset('admin/saveblog') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">


            <div class="col-sm-4">
                <div class="maincourse">
                    Blog Title
                </div>
            </div>


            <div class="col-sm-6">
                <div class="maininput">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                        aria-describedby="emailHelp" placeholder="Enter blog Title">
                </div>
            </div>


        </div>




        <div class="row">

            <div class="col-sm-4">
                <div class="maincourse">
                    Description
                </div>
            </div>


            <div class="col-sm-6">
                <div class="maininput">
                    <textarea class="ckeditor form-control" id="summary-ckeditor" name="description"></textarea>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-sm-4">
                <div class="maincourse">
                    Upload Image
                </div>
            </div>


            <div class="col-sm-6">
                <div class="maininput">
                    <input type="file" class="form-control" id="avatar" name="avatar" aria-describedby="emailHelp">
                </div>
            </div>


        </div>


        <div class="col-md-5 pull-left commonbtn">
            <div class="form-group text-center">
                <div id="mycomonbtn">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onblur' => 'return validateForm();']) !!}
                </div>
            </div>
        </div>
    </form>

@section('app_jquery')
    <script>
        function validateForm() {
            return true;
        }

    </script>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection

@endsection
