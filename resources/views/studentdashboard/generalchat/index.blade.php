@extends('studentdashboard.layouts.index')


@section('default')
    <style>
        .mainContent {
            height: 100vh;
            margin-top: 135px;
            margin-bottom: 200px;
        }
        .mainChatArea .panel-body {
    padding: 15px;
    background: darkgrey;
    font-size: 14px;
}

        .chatMessage {
            position: relative;
            margin-left: 60px;
        }

        /* .mainChatArea .panel-body {
            padding: 15px;
            background: #eee;
            font-size: 14px;
        } */

        .mainChatArea .right .panel-body {
            padding: 15px;
            background: #15db81;
            color: #fff;
            font-size: 14px;
        }

        .mainChatArea {
            padding: 30px;

        }

        .chatSection {
            position: relative;
        }

        .chat-box .chat-avatar {
            width: 48px;
            display: block;
        }

        .chat-box .chatbox-user {
            margin-bottom: 35px;
        }

        .img-circle {
            height: 48px;
        }

        .right .chatMessage {
            position: relative;
            margin-left: 0px;
            margin-right: 60px;
        }

        .chat-box .chatbox-user.right .message .chat-time {
            text-align: left;
        }

        .chat-box .chatbox-user .chat-time {
            display: block;
            text-align: right;
        }

        .chat-box .chatbox-user.right .chat-time {
            display: block;
            text-align: left;
        }

        footer.bt {
            position: fixed;
            bottom: 100px;
            background: #ccc;
            padding: 15px 20px;
        }

        div.msg-box {
            padding-bottom: 100px;
        }

    </style>
    <div class="w3-main mainContent" style="margin-left:250px">
        <div class="chatSection">
            <?php $user_id = Auth::id(); ?>
            <div class="mainChatArea">
                <div class="chat-box msg-box" id="chating">
                    @for ($i = sizeOf($chat->items()) - 1; $i > -1; $i--)

                        <?php $c = $chat[$i]; ?>
                        @if ($c->user->id == $user_id)
                            @include('studentdashboard.generalchat.partial.student')

                        @else
                            @include('studentdashboard.generalchat.partial.user')
                        @endif
                    @endfor
                    <?php $last_msg_id = isset($c) ? $c->id : ''; ?>
                    {!! Form::hidden('last_chat', $last_msg_id, ['id' => 'last_chat']) !!}

                </div>
            </div>
            <div class="chatFooter">
                <footer class="bt">
                    <div class="form-input clearfix mt10 mb10">
                        <div class="input-group">

                            <input type="text" id="text_msg" class="form-control input-sm" placeholder="Type here"
                                onkeyup="register_enter(event);">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-sm" type="button" onclick="send_msg();">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button>
                            </span>

                        </div>
                    </div>
                </footer>
            </div>
        </div>

    @section('app_jquery')
        <script>
            let last_msg_id = '{!! $last_msg_id !!}';

            setInterval(function() {
                latestChat()
            }, 100 * 60 * 1);


            function latestChat() {
                var url = "{!! asset('student/chat/generallatestchat?msg_id=') !!}" + last_msg_id;
                console.log(url);
                $.get(url, function(data, status) {
                    // console.log("m7y url ",url);

                    var res = JSON.parse(data);
                    if (res.response[0] != null) {

                        for (let i = (res.response.length - 1); i > -1; i--) {
                            var user_msg = user_chat_html(res.response[i].chat);

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
                                <div class="message">
                                 <div id="last_msg" class="panel">
                                  <div class="panel-body">
                                   <p>` + msg + `</p>
                                  </div>
                                 </div>
                                 <small class="chat-time">
                                  <i class="ti-time mr5"></i>
                                  <b>0 minutes ago</b>

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
                $.post("{!! asset('/student/chat/generalsend') !!}", {
                        message: msg,
                        _token: '{!! csrf_token() !!}'
                    })
                    .done(function(data) {
                        data = JSON.parse(data);
                        console.log("data :", data)
                        //append
                        var html = `<div class="chatbox-user right">
                                <a href="javascript:;" class="chat-avatar pull-right">
                                 <img src="https://picsum.photos/200/300/?blur"
                                  class="img-circle"
                                  title="{!! $student_common->student->name !!}" alt="">
                                </a>
                                <div class="message">
                                 <div id="last_msg" class="panel">
                                  <div class="panel-body">
                                   <p>` + msg + `</p>
                                  </div>
                                 </div>
                                 <small class="chat-time">
                                  <i class="ti-time mr5"></i>
                                  <b>0 minutes ago</b>

                                  <span class="ti-check text-success" > </span>
                                 </small>
                                </div>
                               </div>`;
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
@endsection
