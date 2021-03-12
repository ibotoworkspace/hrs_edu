<?php
$page_layout = session()->get('page_layout');
$header = $page_layout->header;
$layout = '';

if (!$header) {
//footer and header hide here
$layout = 'studentdashboard.layouts.appindex';
} else {
$layout = 'studentdashboard.layouts.index';
}
?>
@if ($header)
    @extends($layout)
@endif
<link href="{{ asset('css/newmake.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')






    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>
                MAKE PAYMENT
            </title>
            <div class="serchsite">
                <div class="container-fluid">
                    {{-- <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div> --}}

                    <div class="row paymentarea">
                        <div class="col-sm-12">
                            <div class="paymentareadata">
                                <h3>MAKE PAYMENT</h3>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-danger alert-block" id="error" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong class="promo_msg">Message heree </strong>
                    </div>
                    <div class="alert alert-success alert-block" id="success" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong class="promo_msg">Message heree </strong>
                    </div>
                    <form method="post" action="{{ url('/student/paymentmethood') }}">
                        {{ csrf_field() }}

                        <div class="row mypayment">
                            <div class="col-sm-12">
                                <div class="ngncode">
                                    <h3 id="ammount" name="ammount">USD {{ $register_course->course->price }}</h3>
                                </div>
                            </div>
                        </div>
                        <input name="promo_code_id" class="promo-code-class" hidden>
                        <input name="actual_price" class="actual-price-class" hidden>
                        <input name="discount_price" class="discount-price-class" hidden>
                        <input name="price" class="price" value="{{ $register_course->course->price }}" hidden>


                        <input name=" course_id" value="{{ $register_course->id }}" hidden>
                        {{-- <div class="form-group row mypayment">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control paymentformdata" id="formGroupExampleInput"
                                    placeholder="Example input">
                            </div>
                        </div> --}}

                        <div class="row mypayment">
                            <div class="paymentul">
                                <p class="col-sm-1">Pay Via *</p>
                                {{-- <label class="radio-inline" class="col-sm-1"><input type="radio" name="optradio">Credit
                                Card</label>
                            <label class="radio-inline" class="col-sm-1"><input type="checkbox"
                                    name="optradio">paypal</label> --}}
                                {{-- <img src="{{ asset('images/Icon-37.png') }}" class="img-responsive" class="col-sm-1"> --}}
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_type" value="stripe" checked>
                                <label class="radio-inline" for="exampleRadios1">
                                    Credit Card
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_type" value="paypal">
                                <label class="radio-inline" for="exampleRadios2">
                                    Pay Pal
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="col-sm-2 col-form-label" for="exampleRadios2">
                                    Promo Code
                                </label>
                                <input class="form-control paymentformdata" type="text" onchange="promoCode()"
                                    placeholder="Enter promo code" name="promocode" id="promocode">

                            </div>
                        </div>

                        <div class="row mypayment">
                            <div class="pamentclick">
                                <button type="submit" class="btn btn-primary proced">Proceed to
                                    Payment</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </section>








    </div>

    <script>
        function promoCode() {
            var promo_code = $('#promocode').val();
            var current_amount = {{ $register_course->course->price }};
            console.log('value !!!!!!', promo_code);
            console.log('current_amount !!!!!!', current_amount);

            let _token = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ asset('student/applypromocode') }}",
                type: "POST",
                data: {
                    code: promo_code,
                    current_amount: current_amount,
                    _token: _token
                },
                success: function(response) {
                    console.log(response);
                    let message = '';
                    if (response.status == "success") {
                        message = response.msg;
                        let actual_amount = response.response.actual_amount;
                        let discount_amount = response.response.discount_amount;
                        let price = response.response.price;
                        let promo_id = response.response.promo_id;

                        $('#ammount').html(price);
                        $('.price').val(price);
                        $('.actual-price-class').val(actual_amount);
                        $('.discount-price-class').val(discount_amount);
                        $('.promo-code-class').val(promo_id);

                        $('#success').css('display', ' block');
                        $('#error').css('display', ' none');
                    } else {
                        console.log('failed')
                        message = response.msg;
                        $('#success').css('display ', 'none');
                        $('#error').css('display', ' block');
                    }

                    $('.promo_msg').html(message)

                },
            });

        }

    </script>


@endsection
