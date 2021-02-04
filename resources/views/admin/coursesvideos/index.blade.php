
@extends('layouts.default_module')
@section('module_name')
{{$course->title ?? ''}} Courses Videos
@stop





@section('add_btn')
{!! Form::open(['method' => 'get', 'url' => ['admin/coursesvideos/create/'.$course->id ?? ''], 'files'=>true]) !!}  

<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop

@section('table-properties')
width="400px" style="table-layout:fixed;"
@endsection
@section('table')
{{-- {!! Form::open(['method' => 'get', 'route' => ['coursesvideos.search'], 'files'=>true]) !!}
@include('admin.Coursesvideos.partial.searchfilters')
{!!Form::close() !!} --}}
<thead>
    <tr>
            
    <th>Title</th>
    <th>Videos</th>
    <th>Edit</th>
                    
    <th>Delete</th>  

</tr>
            </thead>
            <tbody>
            
                @foreach($coursevideos as $video)
            
                <tr>
            
                    <td>{!! $video->title!!}</td>
        <td class="mediaaa"> <iframe width="80px" height="50px" src="{{ $video->url }}" frameborder="0" allowfullscreen>  
        </iframe></td>

        <td>
			{!! link_to_action('Admin\CourseVideosController@edit',
			'Edit', array($video->id), array('class' => 'badge bg-info')) !!}
             {{-- <input type="hidden" name="course_id" value="{!! $course->id !!}"> --}}
        </td>


        <td>{!! Form::open(['method' => 'POST', 'route' => ['coursesvideos.delete', $video->id]]) !!}
			<a href="" data-toggle="modal" name="activate_delete" data-target=".delete">
				<span class="badge bg-info btn-danger ">
					{!! $video->deleted_at?'Activate':'Delete' !!}</span></a>
			{!! Form::close() !!}
		</td>
    
        </tr>
   
                    @endforeach
            </tbody>
            @section('pagination')
            <span class="pagination pagination-md pull-right">{!! $coursevideos->render() !!}</span>
            <div class="col-md-3 pull-left">
                <div class="form-group text-center">
                    <div>
                        {!! Form::open(['method' => 'get', 'route' => ['dashboard']]) !!}
                        {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endsection
            @stop
            