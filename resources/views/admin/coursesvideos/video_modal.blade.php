<div class="modal detail_video" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg">

        <div class="modal-content" id="confirm">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_video_title"> Video </h4>
            </div>
            <div class="modal-body">
                <iframe id="video_iframe">

                </iframe>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal" onclick="closeModal()"
                    data-dismiss="modal">Close</button>
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
    function closeModal() {
        $('.modal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $("#video_iframe").attr("src", "");

    }
    // width="1100px" height="650px

    function open_video(url,title){
        $("#video_iframe").attr("src", url);
        $("#modal_video_title").html( title);
        $("#video_iframe").css("width", "1100px");
        $("#video_iframe").css("height", "650px");

    }
</script>
