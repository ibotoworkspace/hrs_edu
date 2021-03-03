@extends('studentdashboard.layouts.index')

<?php 

$payment_common = session()->get('payment_common');
$register_course = $payment_common->register_course;

?>

<link href="{{ asset('css/proceedpayment.css') }}" rel="stylesheet">
<link href="{{ asset('css/mainstudentdash.css') }}" rel="stylesheet">



@section('default')



    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>PROCEED</title>
            <div class="procedarea">
                <div class="container-fluid">

                    <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div>

                    <div class="row procedrow">
                        <div class="col-sm-12">
                            <h3>PROCEED TO PAYMENT</h3>
                        </div>
                    </div>
                    <div class="row procedform">
                        <div class="col-sm-12">
                            <div class="pform">
                                <div class="form-group row">
                                    <i class="fa fa-credit-card mycard" aria-hidden="true"></i><input type="text"
                                        class="form-control mycarddata" id="inputAddress" placeholder="Credit Card Number*">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group row">
                                        <i class="fa fa-calendar mycardss" aria-hidden="true"></i><input type="text"
                                            class="form-control mycarddata" placeholder="Expiration (MM/YY)*">
                                    </div>
                                    <div class="col-sm-6 form-group row foum">
                                        <i class="fa fa-lock mycards" aria-hidden="true"></i><input type="text"
                                            class="form-control mycarddata" placeholder="Card Security Code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <i class="fa fa-map-marker mycards" aria-hidden="true"></i><input type="text"
                                        class="form-control mycarddata" id="inputAddress" placeholder="Postal Code*">
                                </div>
                                <div class="row">
                                    <div class="pformdata">
                                        <p>Your personal data will be used to process your order, support your
                                            experience throughout this website, and for <br>
                                            other purposes described in our privacy policy.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="pformclick">
                                        <button type="button" class="btn btn-primary pformpress">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc">
                        <!-- Virtual Card Starts Here -->
                        <div class="center card_">
                            <div class="card_-display">
                                <div class="card_-box-inner">
                                    <div class="card_-box-front">
                                        <div class="chip"></div>
                                        <div class="card_number">
                                            <div class="part-1"></div>
                                            <div class="part-2"></div>
                                            <div class="part-3"></div>
                                            <div class="part-4"></div>
                                        </div>
                                        <div class="account-holder-name"></div>
                                        <div class="expiry">
                                            <div class="month"></div>
                                            
                                            <div class="year"></div>
                                        </div>
                                    </div>
                                    <div class="card_-box-back">
                                        <div class="plate"></div>
                                        <div class="cvv">
                                            <div class="code"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">


                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @elseif(Session::has('error'))
                                    <div class="alert alert-danger text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('error') }}</p>
                                    </div>
                                @endif
                                <!-- {{ env('STRIPE_KEY') }} -->
                                <form role="form" action="{{ url('student/stripe') }}" method="post"
                                    class="require-validation" data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                    @csrf

                                    <input name="amount" value="{{ $register_course->course->price }}" hidden>
                                    <input name="course_register_id" value="{{ $register_course->id }}" hidden>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input class='form-control'
                                                size='4' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                                class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>
                                    

                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- Virtual Card Ends Heres-->
                    </div>
                </div>
            </div>
        </section>



    </div>




    <script src="js/checkout/virtualcard.js"></script>


    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });

    </script>


@endsection
