<div class="modal forget_password" id="pointsdonated" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg">

        <div class="modal-content" id="confirm">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_video_title">
                   Forget Password </h4>

                <button type="button" class="close myy" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">


                <form method="post" action="{{ url('student/forgetpassword') }}">
                    {{ csrf_field() }}


                    <label class="emaillss" >Enter Email</label>
                    <input type="email"  required   class="form-control myyyyema" style="color: black;" name="email" />



{{-- <div>



</div> --}}



               {{-- <button type="submit" class="btn btn-md btn-primary myymodala">Submit </button> --}}

                {{-- <a href="" type="button" class="btn btn-md btn-primary myyuu"
                data-toggle="modal" >
                Submit

            </a> --}}
            <div class="form-group">
                <input type="submit"  class="btn btn-md btn-primary myyuu" value="submit" />
            </div>
        </form>




               </div>
               {{-- {!! Form::close() !!} --}}

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









