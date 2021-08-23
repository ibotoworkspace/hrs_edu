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
  {{-- <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/quiz/excel/'.$couse_id) }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/quiz/csv/'.$couse_id) }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/quiz/pdf/'. $couse_id) }}"
                style="color: #fff">PDF</a> </button>
    </div> --}}



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
                            <button  class="fa fa-cog settings" aria-hidden="true" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               
                                </button>
                                    
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/edit/quiz/' . $q->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$q->id}}" 
                                        hit_url="{{ url('/admin/quizlist/delete/' . $q->id) }}" name="activate_delete_link" 
                                        data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $q->deleted_at ? 'Activate' : 'Delete' !!}</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                       

                    </div>
                </td>
              

            </tr>



        @endforeach

    </tbody>





@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $listofquiz->render() !!}</span>

@endsection

@stop
