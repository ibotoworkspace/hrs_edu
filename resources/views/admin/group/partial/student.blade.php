<div class="chatbox-user right">
    <a href="javascript:;" class="chat-avatar pull-right">
        <img src="https://picsum.photos/200/300/?blur"
             class="img-circle"
             title="{!! $c->name !!}" alt="">
    </a>
    <div class="message">
        <div class="panel">
            <div class="panel-body">
                <p>{!! $c->chat !!}</p>
            </div>
        </div>
        <small class="chat-time">
            <i class="ti-time mr5"></i>
            <b>{!! $c->created_on !!}</b>
            <input type="checkbox"  class="ti-check text-success no-borders">
            {{--<i class="ti-check text-success"></i>--}}
            <span class="ti-check text-success" > </span>
        </small>
    </div>
</div>
