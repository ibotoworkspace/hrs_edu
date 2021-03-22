@extends('layouts.default_module')
@section('module_name')
    Discussion of groups
@stop


<style>
    @import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

    .detailBox {
        /* width:; */
        border: 2px solid #bbb;
        margin: 50px;
    }

    .titleBox {
        background-color: #fdfdfd;
        padding: 10px;
    }

    .titleBox label {
        color: #444;
        margin: 0;
        display: inline-block;
    }

    .commentBox {
        padding: 10px;
        border-top: 1px dotted #bbb;
    }

    .commentBox .form-group:first-child,
    .actionBox .form-group:first-child {
        width: 80%;
    }

    .commentBox .form-group:nth-child(2),
    .actionBox .form-group:nth-child(2) {
        width: 18%;
    }

    .actionBox .form-group * {
        width: 100%;
    }

    .taskDescription {
        margin-top: 10px 0;
    }

    .commentList {
        padding: 0;
        list-style: none;
        max-height: 200px;
        overflow: auto;
    }

    .commentList li {
        margin: 0;
        margin-top: 10px;
    }

    .commentList li>div {
        display: table-cell;
    }

    .commenterImage {
        width: 30px;
        margin-right: 5px;
        height: 100%;
        float: left;
    }

    .commenterImage img {
        width: 100%;
        border-radius: 50%;
    }

    .commentText p {
        margin: 0;
    }

    .sub-text {
        color: #aaa;
        font-family: verdana;
        font-size: 11px;
    }

    .actionBox {
        border-top: 1px dotted #bbb;
        padding: 10px;
    }

</style>

@section('table')


    <div class="detailBox">
        {{-- <div class="titleBox">
      <label>Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div> --}}
        <div class="commentBox">

            <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="actionBox">
            <ul class="commentList">
                @foreach ($discusssion_list as $discuss)


                    <li>
                        <div class="commenterImage">
                            <img src="{{ $discuss->user->avatar }}" />
                        </div>
                        <div class="commentText">
                            <p class="">{{ $discuss->chat }}</p> <span class="date sub-text">
                                {{ \Carbon\Carbon::parse($discuss->created_at->diffForHumans()) }}</span>

                        </div>
                    </li>
                @endforeach
            </ul>
            <form class="form-inline" action="{{ asset('admin/addcomment') }}" role="form">
                @csrf
                <input name="group_id" value="{{ $group_id ?? '' }}" hidden>
                <div class="form-group">
                    <input class="form-control" type="text" name="comment" placeholder="Your comments" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Add</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        function closeModal() {
            $('.modal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        }

    </script>

@stop
