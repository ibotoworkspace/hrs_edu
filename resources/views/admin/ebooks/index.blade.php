@extends('layouts.default_module')
@section('module_name')
    EBooks
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['ebooks.create'], 'files' => true]) !!}
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
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/excel') }}" style="color: #fff"> Excel</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybutonarea">
            <a href="{{ asset('admin/course/csv') }}" style="color: #fff">CSV</a> </button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> <a href="{{ asset('admin/course/pdf') }}"
                style="color: #fff">PDF</a> </button>
    </div>



    <thead>
        <tr>
            <th class="myso">
                <div class="bestcso">S. No.</div>
            </th>
    
            <th class="mycourse">
                <div class="bestcourse">Name</div>
            </th>
    
            <th class="mycourse">
                <div class="bestcourse">Course</div>
            </th>
            <th class="option">
                <div class="bestoption">Image</div>

            </th>
        
            <th class="option">
                <div class="bestoption">Option</div>

            </th>

        </tr>
    </thead>
    <tbody>

        @foreach ($ebooks as $key => $eb)

            <tr class="myarrow myarrow_{{ $eb->id }}">
                <td class="mynbr">
                    <div class="bestnbr" name="sno"> {{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! strtoupper($eb->name)  !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! strtoupper($eb->course->title)  !!}</div>
                </td>
                <?php if (!$eb->avatar) {
                $eb->avatar = asset('images/mediallogo.png');
                } ?>

                <td><img width="100px" src="{!! $eb->avatar !!}" class="show-product-img imgshow"></td>
           
                <td class="optionss">
                    <div class="myoptionss">

                        <div class="dropdown">
                            <button  class="fa fa-cog settings" aria-hidden="true" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               
                                </button>
                                    
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('/admin/ebooks/edit/' . $eb->id) }}">Edit</a></li>


                                <li>
                                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$eb->id}}" hit_url="{{ url('/admin/ebooks/delete/' . $eb->id) }}" name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                                        <span class="badge bg-info btn-danger ">
                                            {!! $eb->deleted_at ? 'Activate' : 'Delete' !!}</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                       

                    </div>
                </td>
            </tr>

            </tr>

        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $ebooks->render() !!}</span>
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
