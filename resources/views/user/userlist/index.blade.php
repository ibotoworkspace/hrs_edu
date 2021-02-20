@extends('layouts.default_module')

<link href="{{asset('css/contactus.css')}}" rel="stylesheet">
@section('module_name')
User List
@stop
  
{{-- @section('add_btn')

{!! Form::open(['method' => 'get', 'route' => ['courses.create'], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop --}}



@section('table-properties')
width="400px" style="table-layout:fixed;"
{{-- @endsection --}}






@section('table')
{!! Form::open(['method' => 'get', 'route' => ['userlist.search'], 'files'=>true]) !!}
@include('user.userlist.partial.searchfilters')
{!!Form::close() !!}






			<thead>
                    <tr>
                        
                        <th class="mycourse">
                            <div class="bestcourse">Name</div>
                        </th>
                      
                        <th class="mycourse">
                            <div class="bestcourse">Email</div>
                        </th>
					
						



                    </tr>
                </thead>
                <tbody>

                    @foreach($userlist as $lp)

                    <tr class="myarrow">
                       
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $lp->name !!}</div>
                        </td>

                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $lp->email !!}</div>
                        </td>
                       
                    </tr>


                 
                   
                    </tr>

                </tbody>






@endforeach
			@stop