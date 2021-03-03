

@extends('user.layouts.index')

<link href="{{asset('css/contactus.css')}}" rel="stylesheet">
  
  @section('default')

<section>
<h3 class="myheading">
Student Login

</h3>
    <div class="contactarea">
        <div class="container">
            
            <div class="row">
              
              @if ($message = Session::get('error'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
              </div>
          @endif
      
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
             <form method="post" action="{{ url('/student/checklogin') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Enter Email</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
            </div>
             </form>
            </div>
        </div>
    </div>
</section>



@endsection

