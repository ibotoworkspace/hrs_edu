<div class="chatbox-user">
    <a href="javascript:;" class="chat-avatar pull-left">
    {{--        <img src="{!! $c->image !!}"--}}
        <img src="https://picsum.photos/200/300/?blur"
             class="img-circle"
             title="{!! $admin_common->name !!}" alt="">
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
            <input type="checkbox" class="ti-check text-success no-borders">
            <span class="ti-check text-success" > </span>
            {{--<i class="ti-check text-success "></i>--}}
        </small>
    </div>
</div>

