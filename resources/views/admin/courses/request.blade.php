@extends('layouts.default_module')
@section('module_name')
    Courses
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
            <th class="myso">
                <div class="bestcso">S.No</div>
            </th>
            <th class="myso">
                <div class="bestcso">User Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Course Title</div>
            </th>

            <th class="option">
                <div class="bestoption">Option</div>

            </th>




        </tr>
    </thead>
    <tbody>
        @foreach ($course_request as $key => $cr)

            <tr class="myarrow myarrow_{{ $cr->id }}">
                <td class="mynbr">
                    <div class="bestnbr" name="sno"> {{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $cr->course->title !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $cr->user->name !!}</div>
                </td>

                <td class="optionss">

                    @if ($cr->can_download == 1)
                        <span class="badge bg-info btn-primary ">
                            Allowed</span></a>
                    @else
                        <a href="" data-toggle="modal" hit_method="get"
                            hit_url="{{ url('/admin/coursesrequest/status/' . $cr->id) }}" name="activate_delete_link"
                            data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?">
                            <span class="badge bg-info btn-danger ">Pending</span></a>
                    @endif

                </td>
            </tr>



        @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $course_request->render() !!}</span>
@endsection

@stop
