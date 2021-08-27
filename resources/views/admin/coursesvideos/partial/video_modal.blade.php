    
<div class="modal fade detail_{!! $video->id!!} in" tabindex="-1" role="dialog" aria-hidden="true"
    data-backdrop="false">
    <div class="modal-dialog modal-mg ">

        <div class="modal-content" id="confirm">
            <div class="modal-header">
                <h4 class="modal-title">DETAIL </h4>
            </div>
            <div class="modal-body">
                 <table class="table table-bordered table-striped mg-t editable-datatable">

                    <thead>
                    <tr>
                        <th> Name</th>
                       
                    </tr>
                    </thead> 
                    <tbody id="my-modal-table">
                 
                      
                        <tr>
                             <td class="mediaaa"> <iframe width="500px" height="350px" src="{{ $video->url }}" frameborder="0" allowfullscreen>  
        </iframe></td>
                            
                        </tr>
                     
                    
                    </tbody>
                </table>
               

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal" onclick="closeModal()" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<style>
    .modalfix {
            min-height: 20px im !important;
            padding: 19px im !important;
            margin-bottom: 20px im !important;
            background-color: #243439 im !important;
            border: 1px solid #243439 im !important;
            border-radius: 4px im !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%) im !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%) im !important;
            width: 83% im !important;
        }
</style>


<script>

  
function closeModal(){
$('.modal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
}
</script>
