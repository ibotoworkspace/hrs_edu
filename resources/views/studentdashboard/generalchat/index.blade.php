<style>
    .img-circle {
        height: 48px;
    }

    .no-borders {
        opacity: 0;
    }

    .no-borders:focus {}

</style>
@extends('studentdashboard.layouts.index')
@section('module_name')
    Discussion of groups
@stop

@section('default')


    <div class="clearfix mt10 mb10">
        <span class="pagination pagination-md pull-right">
            {!! $chat->render() !!}</span>
    </div>

    <div class="chat-box" id="chating">
        @for ($i = sizeOf($chat->items()) - 1; $i > -1; $i--)

            <?php $c = $chat[$i]; ?>
            @if ($c->user->role_id == 2)
                @include('studentdashboard.course.partial.user')
            @endif
            @if ($c->user->role_id == 1 || $c->user->role_id == 3)
                @include('studentdashboard.course.partial.student')
            @endif
        @endfor
        <h1>dsgfg</h1>
    </div>

    <?php $last_msg_id = isset($c) ? $c->id : ''; ?>
    {!! Form::hidden('last_chat', $last_msg_id, ['id' => 'last_chat']) !!}
    {{-- <footer class="bt"> --}}
    <div class="form-input clearfix mt10 mb10"
        style="position: absolute !important; bottom: 100px; width: 85%;right: 10px; z-index: 4; margin-bottom: 50px !important">
        <div class="input-group">

            <input type="text" id="text_msg" class="form-control input-sm" placeholder="type here"
                onkeyup="register_enter(event);">
            <span class="input-group-btn">
                <button class="btn btn-default btn-sm" type="button" onclick="send_msg();">
                    <i class="ti-arrow-right"></i></button>
            </span>

        </div>
    </div>

    {{-- </footer> --}}
    {{-- @stop
@section('footer')
    <footer class="bt">
        <div class="form-input clearfix mt10 mb10">
            <div class="input-group">

                <input type="text" id="text_msg" class="form-control input-sm" placeholder="type here"
                    onkeyup="register_enter(event);">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button" onclick="send_msg();">
                        <i class="ti-arrow-right"></i></button>
                </span>

            </div>
        </div>
    </footer>
@stop --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
@section('app_jquery')
    <script>
        let last_msg_id = '{!! $last_msg_id !!}';

        setInterval(function() {
            latestChat()
        }, 100 * 60 * 1);


        function latestChat() {
            var url = "{!! asset('student/chat/latestchat?msg_id=) !!}" + last_msg_id;
            console.log(url);
            $.get(url, function(data, status) {
                // console.log("m7y url ",url);

                var res = JSON.parse(data);
                if (res.response[0] != null) {

                    for (let i = (res.response.length - 1); i > -1; i--) {
                        var user_msg = user_chat_html(res.response[i].msg);

                        last_msg_id = res.response[i].id
                        $('#chating').append(user_msg);
                    }

                }
            });
        }

        setTimeout(page_scroll_bottom, 500);

        function user_chat_html(msg) {
            return `<div class="chatbox-user">
                                        <a href="javascript:;" class="chat-avatar pull-right">
                                         <img src="https://picsum.photos/200/300/?blur"
                                          class="img-circle"
                                          title="{!! $student_common->student->name !!}" alt="">
                                        </a>
                                        <div class="message ">
                                         <div id="last_msg" class="panel">
                                          <div class="panel-body">
                                           <p>` + msg + `</p>
                                          </div>
                                         </div>
                                         <small class="chat-time">
                                          <i class="ti-time mr5"></i>
                                          <b>0 minutes ago</b>
                                          <input type="checkbox" class="ti-check text-success no-borders">
                                          <span class="ti-check text-success" > </span>
                                         </small>
                                        </div>
                                       </div>`;
        }

        function page_scroll_bottom() {
            var checkFocus = $(".no-borders");
            $('.no-borders')[checkFocus.length - 1].focus();
        }

        function register_enter(e) {
            if (e.keyCode == 13) {
                send_msg();
            }
        }
        var msg_been_sent = false;

        function send_msg() {
            if (msg_been_sent) {
                return;
            }
            msg_been_sent = true;

            var msg = $('#text_msg').val();
            if (msg == '') {
                return;
            }
            console.log("message :", msg)
            $.post("{!! asset('/student/chat/send') !!}", {
                    message: msg,
                    _token: '{!! csrf_token() !!}'
                })
                .done(function(data) {
                    data = JSON.parse(data);
                    console.log("data :", data)
                    //append
                    var html = `
                                <div class="chatbox-user right">
                                        <a href="javascript:;" class="chat-avatar pull-right">
                                         <img src="https://picsum.photos/200/300/?blur"
                                          class="img-circle"
                                          title="{!! $student_common->student->name !!}" alt="">
                                        </a>
                                        <div class="message ">
                                         <div id="last_msg" class="panel">
                                          <div class="panel-body">
                                           <p>` + msg + `</p>
                                          </div>
                                         </div>
                                         <small class="chat-time">
                                          <i class="ti-time mr5"></i>
                                          <b>0 minutes ago</b>
                                          <input type="checkbox" class="ti-check text-success no-borders">
                                          <span class="ti-check text-success"> </span>
                                         </small>
                                        </div>
                                       </div>
                                       
                                       `;
                    $('#chating').append(html);
                    $('#text_msg').val('');
                    var checkFocus = $(".no-borders");
                    $('.no-borders')[checkFocus.length - 1].focus();
                    last_msg_id = data.response.id;
                });
            msg_been_sent = false;
        }

    </script>
@endsection
