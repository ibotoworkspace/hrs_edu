@extends('layouts.default_module')

<link href="{{ asset('css/contactus.css') }}" rel="stylesheet">
@section('module_name')
    User List
@stop

{{-- @section('add_btn')

{!! Form::open(['method' => 'get', 'route' => ['courses.create'], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop --}}



@section('table-properties')
    width="400px" style="table-layout:fixed;"
    {{-- @endsection --}}






@section('table')
    {!! Form::open(['method' => 'get', 'route' => ['userlist.search'], 'files' => true]) !!}
    @include('user.userlist.partial.searchfilters')
    {!! Form::close() !!}






    <thead>
        <tr>

            <th class="mycourse">
                <div class="bestcourse">Name</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">User Identify</div>
            </th>

            <th class="mycourse">
                <div class="bestcourse">User Email</div>
            </th>
            <th class="mycourse">
                <div class="bestcourse">Skill advisor Name</div>
            </th>
            {{-- <th class="mycourse">
                <div class="bestcourse">Skill advisor Email</div>
            </th> --}}
            <th class="mycourse">
                <div class="bestcourse">Course Registered</div>
            </th>
            <th class="option">
                <div class="bestoption">Delete</div>

            </th>




        </tr>
    </thead>
    <tbody>

        @foreach ($userlist as $lp)
            <tr  class="myarrow myarrow_{{ $lp->id }}">

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $lp->name !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $lp->user_reg_id !!}</div>
                </td>

                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $lp->email !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $lp->sda->name ?? '--'!!}</div>
                </td>
                {{-- <td class="hrs">
                    <div class="besthrs" name="mytitle">{!! $lp->sda->email ?? '--'!!}</div>
                </td> --}}
                <td class="hrs">
                    <div class="besthrs" name="mytitle">
                        <a href={{ asset('student/courselist/' . $lp->id) }}><button type="submit"
                                class="btn btn-primary applynow">Courses</button>
                        </a>
                    </div>

                </td>

                <td class="hrs">
                    <a href="" data-toggle="modal" hit_method="get" remove_parent="myarrow_{{$lp->id}}" hit_url="{{ url('/user/list/delete/' . $lp->id) }}" name="activate_delete_link" data-target=".delete" modal_heading="Alert" modal_msg="Do You Want to Delete?">
                        <span class="badge bg-info btn-danger ">
                            Delete</span>
                    </a>
                </td>
            </tr>




        </tr>
        @endforeach
    
    
    </tbody>
    @section('pagination')
    <span class="pagination pagination-md pull-right">{!! $userlist->render() !!}</span>
    <div class="col-md-3 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'route' => ['dashboard']]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection
    @stop
