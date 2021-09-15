<div class="modal delete_video" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_video_title"> Confirmation </h4>

            </div>
            <div class="modal-body">
                Are you Sure ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary close-modal deletevideoconfirm" id_delete="" onclick="deleteVideo()"
                    data-dismiss="modal">Yes
                </button>
                <button type="button" class="btn btn-default close-modal" onclick="closeModal()"
                    data-dismiss="modal">Close
                </button>
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
        height: 83% im !important;
    }

</style>


<script>
    function deleteVideo() {
        var id =$('.deletevideoconfirm').attr('id_delete');
        var my_url = '{!!url("/admin/coursesvideos/delete")!!}'+'/'+id;
        console.log('deltee url',my_url)
        $.ajax({
                        url: my_url,
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            '_token': '{!! csrf_token() !!}'
                        },
                        success: function(data) {
                            $('.myarrow_'+id).remove();

                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });

    }
    function closeModal() {
        $('.modal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();


    }
    // width="1100px" height="650px

    function set_video_url(id){
        console.log('set_video_url',);
        $('.deletevideoconfirm').attr('id_delete',id)

    }
</script>
