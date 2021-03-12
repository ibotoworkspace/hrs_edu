
<div class="modal   detail_{{ $payment_detail->id }}" tabindex="-1" role="dialog" aria-hidden="true"
    data-backdrop="false">
    <div class="modal-dialog modal-mg ">

        <div class="modal-content" id="confirm">
            <div class="modal-header">
                <h4 class="modal-title">DETAIL </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <address>

                            <strong>HRS Academy</strong>
                            <br>
                            416 N.H. Street Suites 5 San,
                            <br>
                            Bernardino CA 92410 USA.
                            <br>
                            <abbr title="Phone">P:</abbr> (213) 484-6829
                        </address>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            <em>Date: {{ $payment_detail->created_at }}</em>
                        </p>
                        <p>
                            <em>Receipt #: HRS-0u00{{ $payment_detail->id }}</em>
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                <div class="row">
                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>#</th>
                                        <th class="text-center">Promo Code</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                {{-- {{ dd($payment_detail) }} --}}
                                <tbody>
                                    <tr>
                                        <td class="col-md-9"><em  style="color: #000;">{{$payment_detail->registerCourse->name}}</em></h4>
                                        </td>
                                        <td class="col-md-1" style="text-align: center;color: #000;"> 1 </td>
                                        <td class="col-md-1 text-center" style="color: #000;">{{ $payment_detail->promocode->code ?? " --" }}</td>
                                        <td class="col-md-1 text-center" style="color: #000;">${{ $payment_detail->price }}</td>
                                        <td class="col-md-1 text-center" style="color: #000;">${{ $payment_detail->price }}</td>
                                    </tr>

                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td class="text-right" style="color: #000;">
                                            <p>
                                                <strong>Subtotal: </strong>
                                            </p>
                                            <p>
                                                <strong>Tax: </strong>
                                            </p>
                                        </td>
                                        <td class="text-center" style="color: #000;"> 
                                            <p>
                                                <strong>${{ $payment_detail->price }}</strong>
                                            </p>
                                            <p>
                                                <strong>$00</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td class="text-right">
                                            <h4><strong>Total: </strong></h4>
                                        </td>
                                        <td class="text-center text-danger">
                                            <h4><strong>${{ $payment_detail->price }}</strong></h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>

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
