<div class="modal   detail_{!! $gr->id !!}" tabindex="-1" role="dialog" aria-hidden="false"
    data-backdrop="false">
    
    <div class="modal-dialog modal-mg bbwith">
        <div class="modal-content" id="confirm">
            <div class="modal-header bblue">
                <h4 class="modal-title">Details</h4>
            </div>
            <div class="modal-body bgdata">
                <div class="row">
                    <div id="" class="col-xs-12">
                        <div>
                            <h4 class="myAnnuaal"> Registerd User</h4>
                            <ul class="point">
                                @foreach ($gr->groupUser as $u )
                                      <li>{{$u->user->name}}</li>
                                @endforeach
                                  
                                  
                            </ul>
                        </div>
                       
                    </div>
                    

                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</div>
