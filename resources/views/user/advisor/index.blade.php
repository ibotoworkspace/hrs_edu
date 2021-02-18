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






			<thead>
                    <tr>
                        
                        <th class="mycourse">
                            <div class="bestcourse">Name</div>
                        </th>
                      

                        <th class="mycourse">
                            <div class="bestcourse">Request</div>
                        </th>
						



                    </tr>
                </thead>
                <tbody>

                    @foreach($advisor as $a)

                    <tr class="myarrow">
                       
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $a->name !!}</div>
                            <td class="hrs">
                                <div class="besthrs"  name="mytitle">ACCEPTED/REJECTED</div>
                            </td>
                        </td>
                       
                    </tr>


                 
                   
                    </tr>

                </tbody>






@endforeach
			@stop