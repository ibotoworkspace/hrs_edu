@extends('layouts.default_module')
@section('module_name')
    Add a New Quiz Question in HRS Network PRO


@stop

@section('table')

    <div class="row">

        <div class="col-sm-12">
            <div class="maincourse">
                Question
            </div>
        </div>
        <div class="col-sm-9">
            <div class="maininput">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Course title">
            </div>
        </div>


        <div class="col-sm-12">
            <div class="plsbtn"><button type="button" class="btn btn-primary " id="plsbtn"><span class="plus">+</span> Add
                    Choices</button></div>
        </div>

    </div>


    <div class="row">

        <div class="col-sm-12">
            <div class="maincourse">
                Correct choice number
            </div>
        </div>
        <div class="col-sm-9">
            <div class="maininput">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

    </div>





    <div class="row">

        <div class="col-sm-12">
            <div class="maincourse">
                Is Paid
            </div>
        </div>


        <div class="col-sm-9">
            <div class="maininput">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Yes">
            </div>
        </div>




        <div class="row">
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mysave"><button type="button" class="btn btn-primary " id="mysave">Save</button></div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mysaveer"><button type="button" class="btn btn-primary " id="mysaveer">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @section('app_jquery')

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    @endsection

@stop
