@extends('user.layouts.index')

<link href="{{asset('css/skilladvisor.css')}}" rel="stylesheet">

{{-- @section('add_btn')
{!! Form::open(['method' => 'get', 'url' => ['userskill/create], 'files'=>true]) !!}  

<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop --}}

{{-- @section('add_btn')
{!! Form::open(['method' => 'get', 'url' => ['userskill/create'], 'files'=>true]) !!}  

<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop --}}

@section('default')


{{-- @section('add_btn')
{!! Form::open(['method' => 'get', 'url' => ['userskill/create'], 'files'=>true]) !!}  

<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop --}}




<section>
    <title>
    DEVELOPMENT ADVISOR
    </title>
    <div class="advisortop">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advisordata">
                        <h2>SKILL DEVELOPMENT ADVISOR</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="skillformarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="formtext">
                        <h3>JOIN US AS SDA</h3>
                        <p>WELCOME TO THE HRS ACADEMY</p>
                    </div>
                </div>
            </div>
            <form action="{{ url('userskill/save') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-sm-6 modalform">
                <input type="text" class="form-control mpdalpad" name="firstname" placeholder="First Name" required>
                <input type="email" class="form-control mpdalpad"  name="email" placeholder="Email Address" required>
                <input type="password" class="form-control mpdalpad" name="password" id="password" placeholder="Password" required>
              
                </div>
                <div class="col-sm-6 modalform">
                <input type="text" class="form-control mpdalpad"  name="last" placeholder="Last Name" required>
                <input type="tel" class="form-control mpdalpad"  name="phone" placeholder="Phone No" required>
                <input type="password" class="form-control mpdalpad"  name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
              
                <div id='message'>asd</div>
                </div>
                <input type="submit" value="">
            </form>
                <div class="col-md-5 pull-left">
                    <div class="form-group text-center">
                        <input type="submit" value="save">
                        <div>
                            {{-- {!!Form::submit('Save',
                            ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!} --}}
                              {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['userskill.save' ], 'files'=>true]) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                    <div class="checkarea">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="checkarea">
                        <label for="vehicle1" class="checktext">By creating an account, you agree to our Terms and Conditions and Privacy Policy</label>
                    </div>
               </div>
            </div>
            <div class="row modalbutton">
               <div class="col-sm-12">
                    <div class="checkmodal">                        
                        <div class="container">
                            <button type="button" class="btn btn-info btn-lg modalclick" data-toggle="modal" data-target="#myModal">Create Account</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="modalimg">
                                                        <img src="{{asset('images/tick.png')}}" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="modalimgdata">
                                                        <p>An email with verification link was <br> sent to waleedhussain@hatinco.com</p>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-5 pull-left">
        <div class="form-group text-center">
            <div>
                {!!Form::submit('Save',
                ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!}
                {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['userskill.save' ], 'files'=>true]) !!}




            </div>
        </div>
    </div> --}}
    

    @section('app_jquery')
    <script>
       
       

        function validateForm(){
    return true;
}

$(function(){

    $('#confirm_password').on('keyup', function () {
        console.log('asd');
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('same password');
  } else 
    $('#message').html('incorect password');
});
})


    </script>

    @endsection
</section>









@endsection