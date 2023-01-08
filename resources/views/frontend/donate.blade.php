@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")


<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/sponsor-page-2.jpg')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Donate Now</h2>
            <p>"We make a living by what we get, but we make a life by what we give."</p>
            <!--<ul class="xs-breadcumb">-->
            <!--    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Donate</li>-->
            <!--</ul>-->
        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">
    <!-- box promo section -->
    <!-- donation form section -->
    <section class="xs-section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main" class="step">
                        <div class="column--padded background--grey-light">
                            <h6 class="checkout__heading text--plum">1. Enter Billing Address</h6>
                            <form class="edit_checkout animate-floating-labels" novalidate="novalidate" id="donate" method="post">
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
                                                    <div class="field field--required">
                                                        <div class="field__input-wrapper">
                                                            <input placeholder="Address" role="combobox" class="field__input" size="30" type="text" id="checkout_billing_address_address1" aria-haspopup="false" value="{{Session::get('user') ? Session::get('user')->billingAddress: ''}}">

                                                        </div>
                                                    </div>
                                                    <div class="field field--optional field--half">
                                                        <div class="field__input-wrapper">
                                                            <input placeholder="ZIP" class="field__input" size="30" type="number" id="checkout_billing_address_zip">
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
                                                    <div class="field field--required field--half">
                                                        <div class="field__input-wrapper">
                                                            <input placeholder="Phone Number" class="field__input field__input--zip" aria-required="true" size="30" type="tel" id="phone" name="phone" >

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step__footer">
                                    <button name="button" type="submit" id="continue_button" class="step__footer__continue-btn btn"><span class="btn__content" data-continue-button-content="true">Continue to payment</span>

                                    </button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="xs-donation-form-wraper">
                        <div class="xs-heading xs-mb-30">
                            <h2 class="xs-title">Make a donation</h2>
                            <span class="xs-separetor v2"></span>
                        </div>
                        <ul class="nav nav-pills mb-3 customerul " id="pills-tab" role="tablist">
                            <li class="nav-item customersli">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="once" aria-selected="true">Give Once</a>
                            </li>
                            <li class="nav-item customersli">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="donate-form-wrapper stripe-elements step-amount">

                                        <form autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="">
                                            <span class="adf-form-header text-center"><span>Choose an amount to give </span>

                                            </span>
                                            <div class="donate-form-body">
                                                <div id="myDIV">
                                                    <div class="amount-wrapper">
                                                        <div class="amount-buttons-wrapper">
                                                            <ul class="nav nav-pills mb-3 customerul ml-5" role="tablist">
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-50_1" role="tab" aria-controls="pills-50" aria-selected="true" data-value="20">$20</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-100" role="tab" aria-controls="pills-100" aria-selected="false" data-value="50">$50</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-150" role="tab" aria-controls="pills-150" aria-selected="false" data-value="100">$100</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-200" role="tab" aria-controls="pills-200" aria-selected="false" data-value="200">$200</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style="width: 55%;">
                                                                    <a class="nav-link button button--grey-20 amount-button" data-toggle="pill" href="#give_once_pills-other" role="tab" aria-controls="give_once_pills-other" style="padding: 0; ">
                                                                        <!-- <span class="preinput homepage">$</span> -->
                                                                        <input data-amount="true" data-parsley-currency="5,50000" data-parsley-error-message="The monthly minimum donation is $5" data-parsley-errors-container=".donate-amount.bb16b09f-1f14-40af-87ac-265116f94dcb .error" name="amount" placeholder="Other " required="" step="1" type="number" value="$0" id="myText" onkeyup="myValue()">
                                                                        <br>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </div>

                                                    </div>
                                                    <div class="inline-calculator text-xs text-cw-black p-2 border-dashed border-0 border-t border-grey-30 leading-normal text-center">
                                                        <span class="subtext">All online donations are on a secure payment platform. Please note that the details you provide us during the transaction will remain strictly confidential.</span>
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
                                            <div class="tab-pane fade  float-right" id="pills-50_1" role="tabpanel" aria-labelledby="pills-15" data-value="20">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $20
                                                </span>
                                            </div>
                                            <div class="tab-pane fade float-right" id="pills-100" role="tabpanel" aria-labelledby="pills-25" data-value="50">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $50
                                                </span>
                                            </div>
                                            <div class="tab-pane fade  float-right" id="pills-150" role="tabpanel" aria-labelledby="pills-50" data-value="100">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $100
                                                </span>
                                            </div>
                                            <div class="tab-pane fade float-right" id="pills-200" role="tabpanel" aria-labelledby="pills-75" data-value="200">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $200
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
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="donate-form-wrapper stripe-elements step-amount">

                                        <form autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="">
                                            <span class="adf-form-header text-center"><span>Choose an amount to give per&nbsp;month</span>

                                            </span>
                                            <div class="donate-form-body">
                                                <div>
                                                    <div class="amount-wrapper">
                                                        <div class="amount-buttons-wrapper">
                                                            <ul class="nav nav-pills mb-3 customerul ml-5" id="pills-tab" role="tablist">
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-15" role="tab" aria-controls="pills-15" aria-selected="true">$20</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-25" role="tab" aria-controls="pills-25" aria-selected="false">$50</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-50" role="tab" aria-controls="pills-50" aria-selected="false">$100</a>
                                                                </li>
                                                                <li class="nav-item donation-level-container" style=" width: 25%;">
                                                                    <a class="nav-link button button--grey-20" data-toggle="pill" href="#pills-75" role="tab" aria-controls="pills-75" aria-selected="false">$200</a>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="inline-calculator text-xs text-cw-black p-2 border-dashed border-0 border-t border-grey-30 leading-normal text-center"><span class="subtext">All online donations are on a secure payment platform. Please note that the details you provide us during the transaction will remain strictly confidential.</span>
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
                                        <div class="tab-content" id="monthly">
                                            <div class="tab-pane fade active show  float-right" id="defult_auto" role="tabpanel" aria-labelledby="defult_auto">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $0
                                                </span>
                                            </div>
                                            <div class="tab-pane fade  float-right" id="pills-15" role="tabpanel" aria-labelledby="pills-15" data-value="15">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $20
                                                </span>
                                            </div>
                                            <div class="tab-pane fade float-right" id="pills-25" role="tabpanel" aria-labelledby="pills-25" data-value="50">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $50
                                                </span>
                                            </div>
                                            <div class="tab-pane fade  float-right" id="pills-50" role="tabpanel" aria-labelledby="pills-50" data-value="100">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $100
                                                </span>
                                            </div>

                                            <div class="tab-pane fade  float-right" id="pills-75" role="tabpanel" aria-labelledby="pills-75" data-value="200">

                                                <span class="payment-due__price skeleton-while-loading--lg">
                                                    $200
                                                </span>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- .xs-heading end -->

                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="col-12" style="padding-top: 10px;">
                <div class="alert-holder-donate"></div>
            </div>
        </div>
        <!-- .container end -->

    </section>
    <!-- End donation form section -->

    <!-- End box promo section -->


</main>




@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    function donateMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-donate"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    const stripe = Stripe("{{ config('services.stripe.publishable_key') }}", {
        locale: 'en'
    });

    $('#donate').on('submit', function(e) {
        e.preventDefault();
        var currentTab = $("ul> li a.active").attr('aria-controls');

        var amount = $("#" + currentTab + " .tab-pane.active").attr("data-value");

        if (amount === undefined) {
            donateMessageBox("Please select an amount", "warning");
            return false;
        } else {
            $(".alert-holder-donate").html('');
        }


        if (currentTab === "monthly") {
            var price;
            if (amount == 15) {
                price = "{{ config('services.stripe.product_1') }}"
            } else if (amount == 50) {
                price = "{{ config('services.stripe.product_2') }}"
            } else if (amount == 100) {
                price = "{{ config('services.stripe.product_3') }}"
            } else {
                price = "{{ config('services.stripe.product_4') }}"
            }
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    )
                }
            });

            var request = $.ajax({
                url: "{{url('processCheckout')}}",
                method: "POST",
                data: {
                    amount: amount,
                    type: currentTab,
                    price: price
                }
            });
            request.done(function(data) {
                if (!data) {
                    window.location.href = '/registration'
                }
                stripe.redirectToCheckout({
                    lineItems: [{
                        // Replace with the ID of your price
                        price: price,
                        quantity: 1,
                    }],
                    mode: 'subscription',
                    successUrl: "{{url('/dashboard/?data=')}}" + data,
                    cancelUrl: "{{url('donate')}}",
                }).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        form.submit();
                    }
                });

            });
            request.fail(function(data) {
                donateMessageBox("Donation failed!", "warning");
            });

        } else {



            var that = this;
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    )
                }
            });
            var request = $.ajax({
                url: "{{url('processCheckout')}}",
                method: "POST",
                data: {
                    amount: amount,
                    type: currentTab
                }
            });
            request.done(function(data) {
                window.location.href = '/checkout?data=' + data

            });
            request.fail(function(data) {
                donateMessageBox("Donation failed!", "warning");
            });

        }
    });
</script>

@endsection