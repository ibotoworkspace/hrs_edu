
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
@include('admin.coursesvideos.video_modal')
@include('admin.coursesvideos.partial.delete_modal')
<thead>
    <tr>

    <th>Title</th>
    <th>Video</th>

    <th>Options</th>



</tr>
            </thead>
            <tbody>
                     {{-- {{dd($coursevideos)}} --}}

                @foreach($coursevideos as $video)

                <tr class="myarrow myarrow_{{ $video->id ?? '' }}">

                    <td>{!! ucwords($video->title)!!}</td>
        {{-- <td class="mediaaa"> <iframe width="80px" height="50px" src="{{ $video->url }}" frameborder="0" allowfullscreen>
        </iframe></td>
       <td>  --}}



                    <td>
                        <a href="" data-toggle="modal" data-target=".detail_video"
                        onclick="open_video('{!!$video->url!!}','{!!$video->title!!}')">
                            <span class=" badge bg-info btn-success">
                                Video</span></a>
                        {{-- @include('admin.coursesvideos.video_modal',['video'=>$video]) --}}
                    </td>



                    <td class="optionss">
                        {{-- <div class="myoptionss">

                            <div class="dropdown">
                                <button  class="fa fa-cog settings" aria-hidden="true" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                                    </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="{{ url('/admin/coursesvideos/edit/' . $video->id) }}">Edit</a></li>


                                    <li>

                                        <a href="{{ url('/admin/coursesvideos/delete/' . $video->id) }}" data-toggle="modal" hit_method="post"
                                            hit_url="{{ url('/admin/coursesvideos/delete/' . $video->id) }}"
                                            name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                                <span class="badge bg-info btn-danger ">
                                                    {!! $video->deleted_at ? 'Activate' : 'Delete' !!}
                                                </span>
                                        </a>

                                        <a href="" data-toggle="modal" hit_method="post"
                                            hit_url="{{ url('/admin/coursesvideos/delete/' . $video->id) }}"
                                            name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                                <span class="badge bg-info btn-danger ">
                                                    {!! $video->deleted_at ? 'Activate' : 'Delete' !!}
                                                </span>
                                        </a>
                                    </li> --}}


                                    <a href="#" data-toggle="modal"  name="activate_delete_link" data-target=".delete_video">
                                        <span class=" badge bg-info btn-danger"
                                         onclick="set_video_url('{!! $video->id!!}')">
                                            Delete
                                        </span>
                                    </a>

                                {{-- </ul>

                            </div>


                        </div> --}}
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
