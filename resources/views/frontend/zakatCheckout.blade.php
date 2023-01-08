@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")


<div class="container" style="margin-top:10%;margin-bottom:10%">


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <p>Hello, {{Session::get('user')->name}}</p>
                    <p>Please enter your card information to zakat ${{Session::get('payment_details')}}. Thank you</p>
                </div>

                <div class="col-md-3"><a href="{{url('/zakat')}}" class="btn btn-info">Change Zakat Amount</a></div>
            </div>

            <div class="card">
                <form action="{{url('dashboard')}}" method="get" id="payment-form">
                    @csrf
                    <div class="form-group">
                        <div class="card-header">
                            <label for="card-element">
                                Enter your credit card information
                            </label>
                        </div>
                        <div class="card-body">
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <input type="hidden" name="plan" value="" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="card-button" class="btn btn-dark" type="submit" data-secret="{{ $intent }}"> Zakat </button>
                    </div>
                    <div id='ajax_loader' style="display: none;">
                        <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include ('layouts.frontend.footer')


@endsection


@section('onpagejs')
<script type="text/javascript">
    jQuery(function($) {
        $(document).ajaxStop(function() {
            $("#ajax_loader").hide();
        });
        $(document).ajaxStart(function() {
            $("#ajax_loader").show();
        });
    });
</script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe("{{ config('services.stripe.publishable_key') }}", {
        locale: 'en'
    });

    // Create a Stripe client.
    const elements = stripe.elements(); // Create an instance of Elements.
    const cardElement = elements.create('card', {
        style: style
    }); // Create an instance of the card Element.
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

    // Handle real-time validation errors from the card Element.
    cardElement.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe
            .confirmCardPayment(clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        //name: 'Jenny Rosen',
                    },
                },
            })
            .then(function(result) {
                //return false;
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                   /* window.location.href = '/zakat'; */
                } else {

                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            )
                        }
                    });
                    var request = $.ajax({
                        url: "zakat/store",
                        method: "POST",
                        data: {
                            paymentId: result.paymentIntent.id,
                            currency: result.paymentIntent.currency,
                            amount: result.paymentIntent.amount,
                            type: "zakat"

                        }
                    });

                    request.done(function(data) {
                        form.submit();

                    });
                }
            });
    });
</script>

@endsection