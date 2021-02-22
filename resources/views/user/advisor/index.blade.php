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

                    <div id="pending_btn_{!!  $a->id !!}" style="{!!  $pending_display !!}">
                        <a href="" data-toggle="modal" name="" data-target=".accept_request_{!!  $a->id !!}">
                            <span class=" badge bg-info btn-success ">
                               Accept
                            </span>
                              {{-- {{dd($a->id)}} --}}
                        </a>
                        @include('user.advisor.partial.confirmation_msg',
                        [

                        'cell_id'=>$a->id,
                        'req_status'=>'accept_request_'.$a->id,
                        'url'=>asset('user/advisor/status_update/'.$a->id),
                        'status'=>'accepted',
                        'msg_status'=>'accept',
                        'btn_class'=>'btn-primary'
                        ])
                        <a href="" data-toggle="modal" name="" data-target=".reject_request_{!!  $a->id !!}">
                            <span class=" badge bg-info btn-danger">
                                Reject
                            </span>
                        </a>
                        @include('user.advisor.partial.confirmation_msg',
                        [

                        'cell_id'=>$a->id,
                        'req_status'=>'reject_request_'.$a->id,
                        'url'=>asset('user/advisor/status_update/'.$a->id),
                        'status'=>'rejected',
                        'msg_status'=>'reject',
                        'btn_class'=>'btn-danger' ])
                    </div>
                   
                </td>
    </tbody>
    @endforeach
@stop

@section('app_jquery')
<script>
	function change_modal_warning(url,status,cell_id) {
            console.log('url',url);
            console.log('status',status);
            $.ajax({
                url:url,
                method:'POST',
                data: {'_token' :'{!! csrf_token() !!}',
                       'status' : status
                      },
                success: function(data){
					// if(data.new_value=='Inprogress'){
					// 	$('#pending_btn_').css('display','none');
					// 	$('#inprogress_btn_').css('display','block');
					// }
					 // completed , rejected
						$('#pending_btn_'+advisor_id).css('display','none');
						// $('#inprogress_btn_').css('display','none');
						// $('#finalstatus_btn_').html(data.new_value);
						// $('#finalstatus_btn_').css('display','block');
					}
                    $('#'+cell_id).html(data.new_value);
                    console.log("response",data);
                },
                error: function(errordata){
                    console.log(errordata)
                }
            }
            )}
        function payment_excel(event){
            $('#user_excel').val( $('#user').val());
            $('#req_num_excel').val( $('#req_num').val());
            $('#date_excel').val( $('#reservationtime').val());
            $('#status_excel').val( $('#status').val());
        }
        // function set_lat_long(lat , long , location){
		// 	alert('st');
        //     $('#lat').val('24.8607');
        //     $('#long').val('67.0011');
        //     $('#map-title').html('<b>Address: 	&nbsp;	&nbsp;</b>'+location);
        // }
        function show_note(msg){
            $('#msg_div').html(msg);
		}
</script>
@endsection
