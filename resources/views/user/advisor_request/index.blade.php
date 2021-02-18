
@extends('layouts.default_module')
<link href="{{asset('css/hrslinux.css')}}" rel="stylesheet">
@section('module_name')
Advisor Request
@stop















@section('table')




<div class="courseoverviewclick">
    <a href="{{asset('user/registration')}}"><button type="button" class="btn btn-primary hrsclicks">Accepted</button></a>
</div>

<div class="courseoverviewclick">
    <a href="{{asset('user/registration')}}">   <button type="button" class="btn btn-primary hrsclicks">Rejected</button></a>
</div>




@stop



