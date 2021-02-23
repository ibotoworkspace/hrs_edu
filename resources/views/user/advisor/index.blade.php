@extends('layouts.default_module')

@section('module_name')
    Advisor List
@stop

{{-- @section('add_btn')

{!!  Form::open(['method' => 'get', 'route' => ['courses.create'], 'files' => true]) !!}
<span>{!!  Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!!  Form::close() !!}
@stop --}}



@section('table-properties')
    width="400px" style="table-layout:fixed;"
@endsection


@section('table')
{!! Form::open(['method' => 'get', 'route' => ['advisor.search'], 'files'=>true]) !!}
@include('user.advisor.partial.searchfilters')
{!!Form::close() !!}


    <thead>
        <tr>

            <th class="mycourse">
                <div class="bestcourse">Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Request</div>
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($advisor as $a)
            {{-- {{dd($a->id)}} --}}
            <tr class="myarrow">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $a->name !!}</div>
                </td>

                <td style="white-space: nowrap">
                    <?php
                    $pending_display = $completed_display = $final_status_display = 'display:none';
                    if ($a->status == 'pending') {
                    $pending_display = 'display:block';
                    } elseif ($a->status == 'inprogress') {
                    $completed_display = 'display:block';
                    } else {
                    $final_status_display = 'display:block';
                    }
                    ?>
                    <a href="" hit_url="{!!asset('user/advisor/status_update/'.$a->id).'?status=accepted'!!}" hit_method="POST">accepted</a>
                    <a href="" hit_url="{!!asset('user/advisor/status_update/'.$a->id).'?status=rejected'!!}" hit_method="POST">rejected</a>

                    
                   
                </td>
    </tbody>
    @endforeach
@stop

@section('app_jquery')
<script>
	
</script>
@endsection
