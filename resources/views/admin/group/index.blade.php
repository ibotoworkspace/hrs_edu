@extends('layouts.default_module')
@section('module_name')
    List of groups
@stop

@section('add_btn')

    {!! Form::open(['method' => 'get', 'route' => ['group.create'], 'files' => true]) !!}
    <span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop


{{-- {{dd($groups)}} --}}
@section('table')
    <div class="ableclick">
        <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
        <a href="{{asset('admin/group/excel')}}" type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</a>
        <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
        <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
    </div>


    <thead>
        <tr>
            {{-- <th class="myso">
                            <div class="bestcso">S. No.</div>
                        </th> --}}
            <th class="myso">
                <div class="bestcourse">S.NO</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Group Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Skill Advisor Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse"> Course Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Is Active</div>
            </th>
            <th class="option">
                <div class="bestoption">Option</div>

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($groups as $key => $gr)
            <tr class="myarrow">
                <td class="mynbr">
                    <div class="bestnbr">{{ $key + 1 }}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs">{{ $gr->name }}</div>
                    {{-- <a href="{{ url('/admin/groupss/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">groupss</a> --}}

                </td>
                <td class="hrs">
                    <div class="besthrs">{{ $gr->skilladvisor->name }}</div>
                    {{-- <a href="{{ url('/admin/groupss/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">groupss</a> --}}

                </td>

                <td class="hrs">
                    <div class="besthrs">{{ $gr->course->title }}</div>
                    {{-- <a href="{{ url('/admin/groupss/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">groupss</a> --}}

                </td>
                <td class="hrs">
                    {{-- @if ($gr->is_active == 1)
                    <span class="badge btn-primary">Active</span>
                    @else
                    <span class="badge btn-secondary">In Active</span>
                    @endif --}}
                    {{-- @if ($gr->is_active == 1) --}}


                    <a onclick="statusUpdate({{ $gr->id }})">
                        <span id="status_{{ $gr->id }}"
                            class={{ $gr->is_active == 1 ? 'btn-primary' : 'btn-danger ' }}>
                            {{ $gr->is_active == 1 ? 'Active' : 'In Active' }}</span></a>
                    {{-- @else
                        <a onclick="statusUpdate({{ $gr->id }})">
                            <span class="badge bg-info btn-danger ">
                                In Active</span></a>
                    @endif --}}

                </td>
                <td>
                    <div class="mydatearrow">
                        <span class="badge detail_{!! $gr->id !!}" data-toggle="modal"
                            data-target=".detail_{!! $gr->id !!}">Detail</span>
                        @include('admin.group.partial.detail_modal')
                    </div>
                </td>
                <td>
                    <div class="mydatearrow">
                        <a href="{{ asset('admin/discussion/' . $gr->id) }}">
                            <span class="btn btn-primary">Discussion</span>
                        </a>
                    </div>
                </td>
            </tr>

        @endforeach

    </tbody>





@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $groups->render() !!}</span>

@endsection

<script>
    function closeModal() {
        $('.modal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    }


    function statusUpdate(group_id) {

        console.log('statusUpdate statusUpdate statusUpdate');
        let my_url = "{{ asset('/admin/group/statusupdate') }}" + '/' + group_id
        $.ajax({
            url: my_url,
            method: 'get',
            dataType: 'json',
            data: {
                '_token': '{!! csrf_token() !!}'
            },
            success: function(data) {
                console.log('data data', data)

                if (data.status == true) {
                    if (data.new_value == 'active') {
                        $("#status_" + group_id).html(data.new_value);
                        $("#status_" + group_id).css('class', ' btn-primary');
                    } else {
                        $("#status_" + group_id).html(data.new_value);
                        $("#status_" + group_id).css('class', ' btn-danger');
                    }

                }
            }
        });
    }

</script>

@stop
