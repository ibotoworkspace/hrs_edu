<div class="form-group">

    {!! Form::label('title', 'Title') !!}
    <div>
        {!! Form::text('title', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Title', 'required', 'maxlength' => '100']) !!}
    </div>



    <div class="form-group">

        {!! Form::label('startdate', 'Start Date') !!}
        <div>
            {!! Form::date('start_date', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Select Start Date', 'required', 'maxlength' => '100']) !!}
        </div>

    </div>

    <div class="form-group">

        {!! Form::label('enddate', 'End Date') !!}
        <div>
            {!! Form::date('end_date', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'required']) !!}
        </div>

    </div>

    <div class="form-group">

        <div>
            <label for="course">Select Course</label>

            <select id="course" name="course_id" class='form-control'>
                @foreach ($courses as $cor)
                    <option value="{{ $cor->id }}">{{ $cor->title }}</option>
                @endforeach

            </select>
        </div>
    </div>
    <div class="form-group">

        <div>
            <label for="sda">Select Skill Advisor</label>

            <select id="sda" name="sda_id" class='form-control' required>
                @foreach ($skill_advisor as $sda)
                    <option value="{{ $sda->id }}">{{ $sda->name }}</option>
                @endforeach

            </select>
        </div>

    </div>
    <div class="form-group">

        {!! Form::label('link', 'Class Link') !!}
        <div>
            {!! Form::text('link', null, ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-trigger' => 'change', 'placeholder' => 'Enter Class Link', 'required', 'maxlength' => '200']) !!}
        </div>

    </div>
    <div class="form-group">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus">
                Add Students </i></button>
        {{-- <div id="selected_user">
            <span class="badge badge-pill badge-info">Info</span>
        </div> --}}
    </div>

    {{-- is active --}}
    <div class="form-group">

        <div>
            <label for="is_active">Select Is Active</label>

            <select id="is_active" name="is_active" class='form-control'>
                <option value="1">True</option>
                <option value="0">False</option>

            </select>
        </div>

    </div>



    <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-lg btn-parsley', 'onblur' => 'return validateForm();']) !!}
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Student</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($users as $key => $user)
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="user_check[]" type="checkbox"
                                        value="{{ $user->id }}" id="user_checkbox">
                                    <label class="form-check-label" for="user_checkbox">
                                        {{ $user->name }}
                                    </label>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        onclick="userFun()">Close</button>
                </div>
            </div>

        </div>
    </div>
    @section('app_jquery')
        <script>
            function validateForm() {
                return true;
            }

            function userFun() {
                console.log('userFun userFun userFun');
                console.log($('#user_checkbox').val());

            }

        </script>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    @endsection
