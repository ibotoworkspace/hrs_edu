{{-- <div class="chatbox-user right " style="background-color: green !important">
    <a href="javascript:;" class="chat-avatar pull-right">
        <img src="https://picsum.photos/200/300/?blur"
             class="img-circle"
             title="{!! $c->name !!}" alt="">
    </a>
    <div class="message msgcss">
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
</div> --}}

<div class="container-fluid" style="float: right; width: 85%;flex-direction: row;">
    
   <div class="row">
       <div class="col-sm-1">
        <a href="javascript:;" class="chat-avatar pull-left" style="margin-left: 10px;margin-top: 11px; ">
        
            <img src="https://picsum.photos/200/300/?blur" title="{!! $c->name !!}" class="img-circle" style="height: 40px !important;width:  40px !important" title="Admin" alt="">
        </a>
       </div>
       <div class="col-sm-11">
        <div class="chatbox-user">
       
        
            <div class="message">
                <div class="panel mPanel" style="">
                    <div class="panel-body"style="padding: 0px !important; padding-top:10px !important; background-color: #aaa;" >
                        <p style="margin-left: 10px !important; font-size: 15px !important">{!! $c->chat !!}</p>
                    </div>
                </div>
                <small class="chat-time" style="float: right">
                    <i class="ti-time mr5"></i>
                    <b style="color: #000;font-size: 12px">{!! $c->created_on !!}</b>
                    <input type="checkbox" class="ti-check text-success no-borders">
                    <span class="ti-check text-success"> </span>
                    
                </small>
            </div>
        </div>
       </div>
   </div>
</div>
