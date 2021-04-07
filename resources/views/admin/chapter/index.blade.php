@extends('layouts.default_module')
@section('module_name')
    List of Chapter of {{ $courses->title ?? '' }}
@stop
@section('add_btn')
    {!! Form::open(['method' => 'get', 'url' => ['admin/chapter/create/' . ($courses->id ?? $chapter[0]->course_id)], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}



@section('table')
    {!! Form::open(['method' => 'get', 'url' => ['admin/chapter/' . $courses->id ?? ''], 'files' => true]) !!}
    @include('admin.chapter.partial.searchfilters')
    {!! Form::close() !!}

    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
    </div>



    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">S.No.</div>
            </th>
            <th class="myso">
                <div class="bestcso">Title</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Decriptions</div>
            </th>

            </th>
            <th class="option">
                <div class="bestoption">Level</div>

            </th>

            <th class="option">
                <div class="bestoption">Option</div>

            </th>




        </tr>
    </thead>
    <tbody>

        @foreach ($chapter as $key => $ch)

            <tr class="myarrow">

                <td class="hrs">
                    <div class="besthrs" name="title">{!! $key + 1 !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="title">{!! $ch->title !!}</div>
                </td>

                <td class="myquiz">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->description !!}</div>
                </td>

                {{-- <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->is_paid == 0 ? 'No' : 'Yes' !!}</div>

                </td> --}}

                <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->course_level !!}</div>

                </td>
                {{-- <td class="optionss">
                    <div class="myoptionss">
                        <i class="fa fa-cog settings" aria-hidden="true"></i>
                    </div>
                </td> --}}
                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/chapter/edit/' . $ch->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$ch->id}}" hit_url="{{ url('/admin/chapter/delete/' . $ch->id) }}" name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $ch->deleted_at ? 'Activate' : 'Delete' !!}</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <i class="fa fa-cog settings" aria-hidden="true"></i>

                    </div>
                </td>

            </tr>






    </tbody>



    @section('pagination')
        <span class="pagination pagination-md pull-right">{!! $chapter->render() !!}</span>

    @endsection




    @endforeach
@stop
