@extends('layouts.default_module')
@section('module_name')
Ebook Request
@stop

@section('table-properties')
width="400px" style="table-layout:fixed;"
{{-- @endsection --}}
@section('table')

{{-- <div class="ableclick">
    <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
    <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
    <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
    <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
    <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
</div> --}}

<thead>
    <tr>
        <th class="mycourse">
            <div class="bestcourse">Course Title</div>
        </th>
        <th class="myso">
            <div class="bestcso">User Name</div>
        </th>
        <th class="myso">
            <div class="bestcso">Download Code</div>
        </th>
        <th class="option">
            <div class="bestoption">Option</div>
        </th>
    </tr>
</thead>
<tbody>
    @foreach ($course_request as $key => $cr)

    <tr class="myarrow myarrow_{{ $cr->id }}">
        <td class="hrs">
            <div class="besthrs" name="mytitle">{!! $cr->ebook->name !!}</div>
        </td>
        <td class="hrs">
            <div class="besthrs" name="mytitle">{!! $cr->user->name !!}</div>
        </td>
        <td class="mynbr">
            <div class="bestnbr" name="sno"> {{ $cr->download_code }}</div>
        </td>

        <td class="optionss">

            @if ($cr->can_download == 1)
            <span class="badge bg-info btn-primary ">
                Allowed
            </span>
            @else
            {{-- <a href="" data-toggle="modal" hit_method="get" hit_url="{{ url('/admin/coursesrequest/status/' . $cr->id) }}" 
                    name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Proceed?"> --}}
            <a href="{{ url('/admin/coursesrequest/status/' . $cr->id) }}">
                <span class="badge bg-info btn-danger ">Pending</span>
            </a>
            @endif

        </td>
    </tr>

    @endforeach
</tbody>
@section('pagination')
<span class="pagination pagination-md pull-right">{!! $course_request->render() !!}</span>
@endsection

@stop