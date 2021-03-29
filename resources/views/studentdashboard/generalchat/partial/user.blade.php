<div class="chatbox-user">
    <a href="javascript:;" class="chat-avatar pull-left">

        <img src="https://picsum.photos/200/300/?blur" class="img-circle" title="Admin" alt="">
    </a>

    <div class="chatMessage">
        <div class="panel">
            <div class="panel-body">
                <p>{!! $c->chat !!}</p>
            </div>
        </div>
        <small class="chat-time">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <b>{!! $c->created_on !!}</b>
            <i class="fa fa-check text-success no-borders" aria-hidden="true"></i>

        </small>
    </div>
</div>
