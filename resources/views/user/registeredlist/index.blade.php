@extends('layouts.default_module')

<link href="{{asset('css/contactus.css')}}" rel="stylesheet">
@section('module_name')
Courses List
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
{{-- {!! Form::open(['method' => 'get', 'route' => ['userlist.search'], 'files'=>true]) !!}
@include('user.userlist.partial.searchfilters')
{!!Form::close() !!} --}} 






			<thead>
                    <tr>
                        
                        <th class="mycourse">
                            <div class="bestcourse">Name</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Registration Date</div>
                        </th>
                        
                        <th class="mycourse">
                            <div class="bestcourse">Hours</div>
                        </th>
                      
                        {{-- <th class="mycourse">
                            <div class="bestcourse">Email</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Course Registered</div>
                        </th> --}}
						



                    </tr>
                </thead>
                <tbody>

                    @foreach($registered as $ru)

                    <?php 
                        $date = strtotime($ru->created_at);                        
                        $date = date("F j, Y",$date);
                    ?>
                    <tr class="myarrow">
                       
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $ru->name !!}</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $date !!}</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $ru->course->hours !!}</div>
                        </td>

                        {{-- <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $lp->email !!}</div>
                        </td>
                        <td class="hrs">
<div class="besthrs"  name="mytitle">
 <a href={{asset('student/courselist')}}><button type="submit" class="btn btn-primary applynow">Course Registered NOW</button>
 </a>
</div> --}}

                        </td>
                    </tr>


                 
                   
                    </tr>

                </tbody>






@endforeach
			@stop