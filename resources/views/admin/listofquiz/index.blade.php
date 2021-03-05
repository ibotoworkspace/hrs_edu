@extends('layouts.default_module')
@section('module_name')
    List of Quiz Question in HRS Network PRO
@stop

@section('add_btn')
    {{-- {{dd($listofquiz)}} --}}
    {!! Form::open(['method' => 'get', 'url' => ['admin/quiz/create/' . $couse_id], 'files' => true]) !!}
    {{-- <input type="hidden" name="course_id" value="{!!$listofquiz->course_id!!}"> --}}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop

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
            <th class="myso">
                <div class="bestcso">S. No.</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Question</div>
            </th>



            <th class="option">
                <div class="bestoption">Choices</div>

            </th>


            <th class="option">
                <div class="bestoption">Option</div>

            </th>





        </tr>
    </thead>
    <tbody>
        @foreach ($listofquiz as $key => $q)
            <tr class="myarrow myarrow_{{ $q->id }}">
                <td class="mynbr">
                    <div class="bestnbr"> {!! $key + 1 !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs">{{ $q->question }}</div>

                </td>
                <td>
                    <a href="{{ url('/admin/choices/' . $q->id) }}" type="button" class="btn btn-primary onquizes"
                        id="myvide">choices</a>
                </td>
                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                    class="caret"></span></button>

                            <ul class="dropdown-menu caret" aria-labelledby="dropdownMenu1">
                                <li class=""><a href="{{ url('/admin/edit/quiz/' . $q->id) }}">Edit</a></li>

                                {{-- {!! Form::open(['method' => 'POST', 'route' => ['quizlist.delete', $q->id]]) !!} --}}
                                <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{ $q->id }}"
                                    hit_url="{{ url('/admin/quizlist/delete/' . $q->id) }}" name="activate_delete_link"
                                    data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                    <span class="badge bg-info btn-danger ">
                                        {!! $q->deleted_at ? 'Activate' : 'Delete' !!}</span></a>
                                {{-- {!! Form::close() !!} --}}
                            </ul>



                            {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="{{ url('/admin/courses/edit/' . $crs->id) }}">Edit</a></li>
        
        
                                        <li>
        
                                            {!! Form::open(['method' => 'POST', 'route' => ['courses.delete', $crs->id]]) !!}
                                            <a href="" data-toggle="modal" name="activate_delete" data-target=".delete">
                                                <span class="badge bg-info btn-danger ">
                                                    {!! $crs->deleted_at ? 'Activate' : 'Delete' !!}</span></a>
                                            {!! Form::close() !!}
                                        </li>
                                    </ul> --}}

                        </div>
                        <i class="fa fa-cog settings" aria-hidden="true"></i>

                    </div>
                </td>
                {{-- <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td> --}}

            </tr>



        @endforeach

    </tbody>





@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $listofquiz->render() !!}</span>

@endsection

@stop
