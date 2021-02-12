
@extends('layouts.default_module')
@section('module_name')
Chapter
@stop
{{-- $chapter[0]->course_id) --}}
@section('add_btn')
{!! Form::open(['method' => 'get', 'url' => ['admin/chapter/create/'.($courses->id ?? $chapter[0]->course_id) ], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop



@section('table-properties')
width="400px" style="table-layout:fixed;"
{{-- @endsection --}}







@section('table')
{!! Form::open(['method' => 'get', 'route' => ['chapter.search'], 'files'=>true]) !!}
@include('admin.chapter.partial.searchfilters')
{!!Form::close() !!}

<div class="ableclick">
                <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
                <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
			</div>



			<thead>
                    <tr>
                        <th class="myso">
                            <div class="bestcso">Title</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Decriptions</div>
                        </th>
                      

				
						</th>
						<th class="option">
                            <div class="bestoption">Lectures</div>

						</th>
						{{-- <th class="option">
                            <div class="bestoption">Course</div>

						</th> --}}
						



                    </tr>
                </thead>
                <tbody>

                    @foreach($chapter as $ch)

                    <tr class="myarrow">
                     
                        <td class="hrs">
                            <div class="besthrs"  name="title">{!! $ch->title !!}</div>
                        </td>
                    
                        <td class="myquiz">
                            <div class="quizes" class="onquizes" id="myquizes">{!! $ch->description !!}</div>
                        </td>
                  
                        
                        <td class="mylectures">
                            <div class="lectur"><button type="button" class="btn btn-primary onlecture" id="mylectur">{!! $ch->lecture !!}</button></div>
                        </td>
					
                    </tr>


                 
                   
 

                </tbody>






@endforeach
			@stop