@extends('layouts.default_module')
@section('module_name')
    List of Promo Code
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['promocode.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}







@section('table')
    {{-- {!! Form::open(['method' => 'get', 'route' => ['courses.search'], 'files' => true]) !!}
    @include('admin.courses.partial.searchfilters')
    {!! Form::close() !!} --}}

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
                <div class="bestcourse">Title</div>
            </th>
            <th class="option">
                <div class="bestoption">Percentage</div>

            </th>

            <th class="option">
                <div class="bestoption">Code</div>

            </th>
            <th class="option">
                <div class="bestoption">Validity</div>

            </th>
            <th class="option">
                <div class="bestoption">Used Times</div>

            </th>
           
            <th class="option">
                <div class="bestoption">Option</div>

            </th>




        </tr>
    </thead>
    <tbody>
        {{-- admin/listofquiz --}}


        @foreach ($promocode as $key => $p)

            <tr class="myarrow">
                <td class="mynbr">
                    <div class="bestnbr" name="sno"> {{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $p->title !!}</div>
                </td>
             
           
	
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $p->percentage !!}</div>
                </td>

                <td class="mynbr">
                    <div class="bestnbr" name="hours">{!! $p->code !!}</div>
                </td>
                <td class="mynbr">
                    <div class="bestnbr" name="hours">{!! $p->validity !!}</div>
                </td>

                <td class="mynbr">
                    <div class="bestnbr" name="hours">{!! $p->used_times !!}</div>
                </td>

         
            
            
                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/promocode/edit/' . $p->id) }}">Edit</a></li>


                                <li>

                                    {!! Form::open(['method' => 'POST', 'route' => ['promocode.delete', $p->id]]) !!}
                                    <a href="" data-toggle="modal" name="activate_delete" data-target=".delete">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $p->deleted_at ? 'Activate' : 'Delete' !!}</span></a>
                                    {!! Form::close() !!}
                                </li>
                            </ul>

                        </div>
                        <i class="fa fa-cog settings" aria-hidden="true"></i>

                    </div>
                </td>
            </tr>




            </tr>








        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $promocode->render() !!}</span>
@endsection
{{-- modal open --}}








{{-- <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Choose Product <span class="caret"></span></button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-toggle="modal" data-target="#modal1">Open modal 1</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modal2">Open modal 2</a></li>
  </ul>
</div> --}}

<!--Modal code -->
{{-- <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Modal 1</h2>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Modal 2</h2>
      </div>
    </div>
  </div>
</div> --}}





{{-- modal close --}}
@stop
