@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section('onpagecss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">
<link href="{{ asset('assets/css/zakat.css') }}" rel="stylesheet">

@endsection

@section("content")


<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window zakat_items">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Give Zakat</h2>
            <!-- <p>Charity does not decrease wealth, no one forgives another except that Allah increases his honor, and no one humbles himself for the sake of Allah except that Allah raises his status.</p> -->

        </div>

    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">

    <!-- causes section -->
    <section class="">
        <div class="container">

            <div class="row ">
                <div class="col-md-12 col-xl-12">
                    <div class="mt-5 mb-5">
                        <h2 class=" xs-title "><b>WHAT IS ZAKAT:</b></h2>
                        <p class="prog_p">The Arabic word ‘Zakat’ literally means ‘to cleanse’ or ‘purification’ and by fulfilling this religious duty, Muslims ensure that their wealth has been purified for the will of Allah.
                            <br> Zakat is a charity God obligates Muslims to pay yearly on their money and property. Zakat payment is made to the poor, vulnerable, and deserving as their divinely established right. The Prophet Muhammad, on him be
                            peace, established Zakat as the third of the five pillars that Islam is built on.
                            <br> If you’re a Muslim, it’s essential that every bit of your offering reaches those who need it most. By donating to HAH, we can guarantee that your gift is being used to fight poverty and make a difference in the lives
                            of the unprivileged and vulnerable.
                        </p>
                        <h2 class=" xs-title "><b>HOW MUCH ZAKAT DO I HAVE TO GIVE?</b></h2>
                        <p class="prog_p">The rate of Zakat is 2.5%, i.e. 2.5 cents in every dollar.
                            <br> If you are in possession of money, gold, silver, stocks or shares that amount to more than the value of 85 grams of gold or 595 grams of Silver called nisab (at current market rates) then you are obliged to pay Zakat.
                            If you own this amount for a full lunar year then your Zakat is due on the last day of the 12 lunar months. Many people choose to give their Zakat in the month of Ramadan, because it is a time of great blessings and the
                            rewards for good deeds are believed to be even greater in this sacred month.
                        </p>
                        <h2 class=" xs-title "><b>WHAT DOES HEMICA’S ANGELS FOR HUMANITY DO WITH YOUR ZAKAT?</b></h2>
                        <p class="prog_p">When you pay your Zakat through our foundation, you are sending your charitable offering directly to widows, orphans, malnourished women and children.
                            <br> HAH uses 100 percent of your Zakat offering for Zakat eligible causes, reaching the most needful people in Bangladesh
                        </p>
                    </div>

                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="xs-volunteer-form-wraper zakat_calculator">
                        <h2>Pick your Zakat amount</h2>
                        <div class="xs-donation-form-wraper">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="donate-form-wrapper stripe-elements step-amount">

                                            <form autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="">
                                                <span class="adf-form-header text-center"><span>Choose an Zakat amount to give </span>

                                                </span>
                                                <div class="donate-form-body">
                                                    <div id="myDIV">
                                                        <div class="amount-wrapper">
                                                            <div class="amount-buttons-wrapper">
                                                                <ul class="nav nav-pills mb-3 customerul " role="tablist" style=" width: 100%;">

                                                                    <li class="nav-item donation-level-container" style="margin: auto;">
                                                                        <a class="nav-link button button--grey-20 amount-button" data-toggle="pill" href="#give_once_pills-other" role="tab" aria-controls="give_once_pills-other" style="padding: 0; ">
                                                                            <!-- <span class="preinput homepage">$</span> -->
                                                                            <input data-amount="true" data-parsley-currency="5,50000" data-parsley-error-message="The monthly minimum donation is $5" data-parsley-errors-container=".donate-amount.bb16b09f-1f14-40af-87ac-265116f94dcb .error" name="amount" placeholder="Zakat Amount " required="" step="1" type="number" value="$0" id="myText" onkeyup="myValue()">
                                                                            <br>
                                                                        </a>
                                                                    </li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-6">
                                            <span class="payment-due-label__total">Total</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="tab-content" id="once">
                                                <div class="tab-pane fade active show  float-right" id="defult_auto" role="tabpanel" aria-labelledby="defult_auto">

                                                    <span class="payment-due__price skeleton-while-loading--lg">
                                                        $0
                                                    </span>
                                                </div>


                                                <div class="tab-pane fade float-right" id="give_once_pills-other" role="tabpanel" aria-labelledby="give_once_pills-other">

                                                    <span class="payment-due__price skeleton-while-loading--lg">
                                                        $<span id="othervalue"></span>
                                                    </span>
                                                </div>
                                                <script>
                                                    function myValue() {
                                                        var x = document.getElementById("myText").value;
                                                        document.getElementById("othervalue").innerHTML = x;
                                                        document.querySelector('#give_once_pills-other').dataset.value = x;

                                                    }
                                                </script>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>

                            <!-- .xs-heading end -->

                        </div>


                        <!-- #volunteer-form .xs-volunteer-form END -->
                        <div class="main">
                            <div class="column--padded background--grey-light">
                                <!-- <h6 class="checkout__heading_zakat text--plum">1. Enter Billing Address</h6> -->
                                <form class="edit_checkout animate-floating-labels" novalidate="novalidate" id="zakat" method="post">
                                    {{ csrf_field() }}
                                    <div class="step__sections">
                                        <div class="section section--contact-information">
                                            <div class="section__header">
                                                <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                                                    <h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header">
                                                        Contact information
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="section__content">
                                                <div class="fieldset">
                                                    <div class="field field--required field--show-floating-label">
                                                        <div class="field__input-wrapper">
                                                            <input placeholder="Email" class="field__input" size="30" type="email" name="checkout[email]" id="checkout_email" value="{{Session::get('user') ? Session::get('user')->email: ''}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section section--billing-address">
                                            <div class="section__header">
                                                <h2 class="section__title" id="main-header">
                                                    Billing address

                                                </h2>
                                            </div>
                                            <div class="section__content">
                                                <div class="fieldset">
                                                    <div class="address-fields">
                                                        <div class="field field--required field--half field--show-floating-label">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="First name" class="field__input" size="30" type="text" name="checkout[billing_address][first_name]" id="checkout_billing_address_first_name" value="{{Session::get('user') ? Session::get('user')->name: ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="Last name" class="field__input" size="30" type="text" name="checkout[billing_address][last_name]" id="checkout_billing_address_last_name">
                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="Country" role="combobox" class="field__input" size="30" type="text" id="Country" aria-haspopup="false" value="">

                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="Address" role="combobox" class="field__input" size="30" type="text" id="checkout_billing_address_address1" aria-haspopup="false" value="{{Session::get('user') ? Session::get('user')->billingAddress: ''}}">

                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="Apt" role="combobox" class="field__input" size="30" type="text" id="Apt" aria-haspopup="false">

                                                            </div>
                                                        </div>

                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="City" class="field__input field__input--zip" aria-required="true" size="30" type="text" name="City" id="City">

                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="State" class="field__input field__input--zip" aria-required="true" size="30" type="text" name="State" id="State">

                                                            </div>
                                                        </div>
                                                        <div class="field field--optional field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="ZIP" class="field__input" size="30" type="number" id="checkout_billing_address_zip">
                                                            </div>
                                                        </div>
                                                        <div class="field field--required field--half">
                                                            <div class="field__input-wrapper">
                                                                <input placeholder="Phone Number" class="field__input field__input--zip" aria-required="true" size="30" type="tel" id="xs-phoneNumber" name="phone">

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step__footer">
                                        <button name="button" type="submit" id="continue_button" class="step__footer__continue-btn btn mb-5"><span class="btn__content" data-continue-button-content="true">Continue to payment</span>

                                        </button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12" style="padding-top: 10px;">
                    <div class="alert-holder-zakat"></div>
                </div>
            </div>

            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End causes section -->


</main>


@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    function zakatMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-zakat"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    const stripe = Stripe("{{ config('services.stripe.publishable_key') }}", {
        locale: 'en'
    });

    $('#zakat').on('submit', function(e) {
        e.preventDefault();

        var amount = $("#give_once_pills-other").attr("data-value");

        if (amount > 0) {
            $(".alert-holder-zakat").html('');


            var that = this;
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    )
                }
            });
            var request = $.ajax({
                url: "{{url('processZakatCheckout')}}",
                method: "POST",
                data: {
                    amount: amount,
                    type: "zakat"
                }
            });
            request.done(function(data) {
                window.location.href = '/zakatCheckout?data=' + data

            });
            request.fail(function(data) {
                zakatMessageBox("Zakat failed!", "warning");
            });

        } else {
            zakatMessageBox("Please enter valid amount", "warning");
            return false;
        }
    });
</script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ajaxStop(function() {
            $("#ajax_loader").hide();
        });
        $(document).ajaxStart(function() {
            $("#ajax_loader").show();
            document.getElementById("xs-contact-form").reset();
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/js/intlTelInput.js"></script>

<script>
    $(function() {
        $("#xs-phoneNumber").intlTelInput({

            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    success(countryCode);
                });
            },
        })
    })
</script>
@endsection
