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
@extends($layout)



@section('default')



    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main mainContent" style="margin-left:250px">




        <section>
            <title>PROCEED</title>
            <div class="procedarea">
                <div class="container-fluid">

                    {{-- <div class="row serchbox">
                        <div class="col-sm-12">
                            <div class="serchsitedata">
                                <input type="text" class="form-control shdata" id="exampleFormControlInput1"
                                    placeholder="Serch here...">
                            </div>
                        </div>
                    </div> --}}

                    <div class="row procedform">
                        <div id="paypal-button-container"></div>
                    </div>



                </div>
            </div>
        </section>



    </div>


    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '88.44'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');

    </script>



@endsection
