
@extends('layouts.default_module')
@section('module_name')
Courses
@stop

@section('add_btn')

{!! Form::open(['method' => 'get', 'route' => ['courses.create'], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop

@section('table-properties')
width="400px" style="table-layout:fixed;"
@endsection







@section('table')
{!! Form::open(['method' => 'get', 'route' => ['courses.search'], 'files'=>true]) !!}
@include('admin.courses.partial.searchfilters')
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
                            <div class="bestcso">S. No.</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Courses</div>
                        </th>
                      

						<th class="option">
                            <div class="bestoption">Hours</div>

						</th>
						<th class="option">
                            <div class="bestoption">Quizes</div>

						</th>
						<th class="option">
                            <div class="bestoption">Videos</div>

						</th>
						<th class="option">
                            <div class="bestoption">Lectures</div>

						</th>
						<th class="option">
                            <div class="bestoption">Option</div>

						</th>
						



                    </tr>
                </thead>
                <tbody>

                    @foreach($courses as $crs)

                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"  name="sno"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs"  name="mytitle">{!! $crs->title !!}</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr"  name="hours">{!! $crs->hours !!}</div>
						</td>
                        <td class="myquiz">
                            <div class="quizes"><button type="button" class="btn btn-primary onquizes" id="myquizes">{!! $crs->detail !!}</button></div>
                        </td>
                        <td class="myvideos">
                            <div class="vide"> 
                              
                                <a href="{{ url('/courses/videos/' . $crs->id ) }}"   type="button" class="btn btn-primary onvideos" id="myvide">1830</a>
                                {{-- <button href="{{ route('courses.videos') }}" type="button" class="btn btn-primary onvideos" id="myvide">1830 --}}
                             
                            </div>
                        </td>
                        <td class="mylectures">
                            <div class="lectur"><button type="button" class="btn btn-primary onlecture" id="mylectur">{!! $crs->lectures !!}</button></div>
                        </td>
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>


                 
                   
                    </tr>

                </tbody>






@endforeach
			@stop