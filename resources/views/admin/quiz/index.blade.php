
@extends('layouts.default_module')
@section('module_name')
list of courses
@stop


@section('add_btn')

{!! Form::open(['method' => 'get', 'route' => ['quiz.create'], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop



@section('table-properties')
width="400px" style="table-layout:fixed;"
{{-- @endsection --}}

@section('table')
<div class="ableclick">
                <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
                <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
			</div>



			<thead>
                    <tr>
                       
                        <th class="mycourse">
                            <div class="bestcourse">Courses</div>
                        </th>
                      

						
						<th class="option">
                            <div class="bestoption">Quizes</div>

						</th>
					
					
						
						



                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $cs)
                    <tr class="myarrow">
                    
                        <td class="hrs">
                            <div class="besthrs"  name="courses">{!! $cs->title!!}</div>
                        </td>
                      
                        <td class="myquiz">
                            <div class="quizes"><a href="{{asset('admin/listofquiz')}}" type="button" class="btn btn-primary onquizes" id="myquizes">1830</a></div>
                            {{-- <div class="quizes"><button type="button" class="btn btn-primary onquizes" id="myquizes">1830</button></div> --}}
                        </td>
                    
                   
					
                    </tr>


                  @endforeach

                </tbody>







			@stop