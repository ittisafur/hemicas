@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")


<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/slider/banner-7.jpg')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Donate Now</h2>
            <p>"Know that you are making a difference"</p>
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

    <!-- End box promo section -->
    <!-- donation form section -->
    <section class="xs-section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xs-donation-form-images mt-5">
                        <img src="assets/images/happy-family-1.jpg" class="img-responsive" alt="Family Images">
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="xs-donation-form-wraper">
                        <div class="xs-heading xs-mb-30">
                            <h2 class="xs-title">Make a donation</h2>
                            <p class="small">A $20 donation can feed one child for a month. Feel the peace of giving</p>
                            <span class="xs-separetor v2"></span>
                        </div>
                        <ul class="nav nav-pills mb-3 customerul" id="pills-tab" role="tablist">
                            <li class="nav-item customersli">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Give Once</a>
                            </li>
                            <li class="nav-item customersli">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="donate-form-wrapper stripe-elements step-amount">

                                        <form action="{{ url('initial')}}" method="GET" autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="">
                                            <span class="adf-form-header text-center"><span>Choose an amount to give </span>

                                            </span>
                                            <div class="donate-form-body">
                                                <div id="myDIV">
                                                    <div class="amount-wrapper">
                                                        <div class="amount-buttons-wrapper">
                                                            <ul class="nav nav-pills mb-3 customerul " id="pills-tab1" role="tablist">
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link active show button button--grey-20 amount-button" data-toggle="pill" href="#pills-50_1" role="tab" aria-controls="pills-50" aria-selected="true" data-value="20" style="width: 140px;" onchange="change(this.value)">$20 <span class="amount-buttons"></span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" data-toggle="pill" href="#pills-100" role="tab" aria-controls="pills-100" aria-selected="false" data-value="50" style="width: 140px;">$50 <span class="amount-buttons" onchange="change(this.value)"></span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" data-toggle="pill" href="#pills-150" role="tab" aria-controls="pills-150" aria-selected="false" data-value="100" style="width: 140px;">$100 <span class="amount-buttons"></span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" data-toggle="pill" href="#pills-200" role="tab" aria-controls="pills-200" aria-selected="false" data-value="200">$200 <span class="amount-buttons"></span></a>
                                                                </li>

                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" data-toggle="pill" href="#give_once_pills-other" role="tab" aria-controls="give_once_pills-other" style="padding: 0;width: 300px;">
                                                                        <!-- <span class="preinput homepage">$</span> -->
                                                                        <input data-amount="true" data-parsley-currency="5,50000" data-parsley-error-message="The monthly minimum donation is $5" data-parsley-errors-container=".donate-amount.bb16b09f-1f14-40af-87ac-265116f94dcb .error" placeholder="Other " required="" step="1" type="number" value="$0" id="myText" onkeyup="myValue()">
                                                                        <br>
                                                                    </a>
                                                                </li>
                                                            </ul>


                                                        </div>

                                                    </div>

                                                </div>
                                                <button class="w-full show-next-donate-screen" id="donate-button" style="cursor: pointer;">Donate</button>
                                            </div>
                                            <div class="inline-calculator text-xs text-cw-black p-2 border-dashed border-0 border-t border-grey-30 leading-normal text-center"><span class="subtext">100% of the donation goes to the cause</span>
                                            </div>
                                        </form>
                                        <p class="leading-snug recaptcha-text pt-1 text-body text-center">All online donations are on a secure payment platform. Please note that the details you provide us during the transaction will remain strictly confidential.</p>
                                        <!-- <p class="leading-snug recaptcha-text pt-1 text-body text-center"><i class="cw-icon-lock"></i>Questions? Contact us at <a href="mailto:info@hemicasangels.org">info@hemicasangels.org</a> or call <a href="tel:+14752063976">+14752063976</a> </p>
                                     -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="donate-form-wrapper stripe-elements step-amount">

                                        <form action="{{ url('initial')}}" method="GET" autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="">
                                            <span class="adf-form-header text-center"><span>Choose an amount to give per&nbsp;month</span>

                                            </span>
                                            <div class="donate-form-body">
                                                <div>
                                                    <div class="amount-wrapper">
                                                        <div class="amount-buttons-wrapper">
                                                            <ul class="nav nav-pills mb-3 customerul " id="pills-tab1" role="tablist">
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link active show button button--grey-20 amount-button" style="width: 140px;" data-toggle="pill" href="#pills-15" role="tab" aria-controls="pills-15" aria-selected="true">$15 <span class="amount-buttons">/mo</span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" data-toggle="pill" href="#pills-25" role="tab" aria-controls="pills-25" aria-selected="false">$50 <span class="amount-buttons">/mo</span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" data-toggle="pill" href="#pills-50" role="tab" aria-controls="pills-50" aria-selected="false">$100 <span class="amount-buttons">/mo</span></a>
                                                                </li>
                                                                <li class="nav-item donation-level-container">
                                                                    <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" data-toggle="pill" href="#pills-75" role="tab" aria-controls="pills-75" aria-selected="false">$200 <span class="amount-buttons">/mo</span></a>
                                                                </li>
                                                                <!--                                                                    <li class="nav-item donation-level-container">
                                                                                                                                                <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" id="pills-200" data-toggle="pill" href="#pills-200" role="tab" aria-controls="pills-200" aria-selected="false">$200 <span class="amount-buttons"><span class="uppercase">usd</span>/mo</span></a>
                                                                                                                                            </li>-->
                                                                <!--                                                                    <li class="nav-item donation-level-container">
                                                                                                                                                <a class="nav-link button button--grey-20 amount-button" id="pills-other" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" style="padding: 0;width: 300px;"> <span class="preinput">$</span>
                                                                                                                                                    <input data-amount="true" data-parsley-currency="5,50000" data-parsley-error-message="The monthly minimum donation is $5" data-parsley-errors-container=".donate-amount.bb16b09f-1f14-40af-87ac-265116f94dcb .error" name="amount" placeholder="Other " required=""
                                                                                                                                                        step="1" type="number" value="">
                                                                                                                                                    <br>
                                                                                                                                                </a>
                                                                                                                                            </li>-->
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>
                                                <button class="w-full show-next-donate-screen" id="donate-button" style="cursor: pointer;">Donate Monthly</button>
                                            </div>
                                            <div class="inline-calculator text-xs text-cw-black p-2 border-dashed border-0 border-t border-grey-30 leading-normal text-center"><span class="subtext">100% of the donation goes to the cause</span>
                                            </div>
                                        </form>
                                        <p class="leading-snug recaptcha-text pt-1 text-body text-center">All online donations are on a secure payment platform. Please note that the details you provide us during the transaction will remain strictly confidential.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- .xs-heading end -->

                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
        <script>
            function myValue() {
                var x = document.getElementById("myText").value;
                document.getElementById("othervalue").innerHTML = x;
                document.querySelector('#give_once_pills-other').dataset.value = x;

            }

            function change(data) {
                if (data == "$0") {
                    console.log("40");
                    $('#myText').text('0');
                    $('.myText').text('0');

                }

            }
        </script>
    </section>
    <!-- End donation form section -->
    <section class="xs-children-section">
        <div class="container">
            <div class="xs-heading row xs-mb-60">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="xs-title">Sponsor A Child</h2>
                    <p>We believe that child sponsorship has the power to drive change that ripples throughout children's lives, their families and entire communities. Below, meet some of the boys and girls who are waiting to be sponsored by someone
                        like you.</p>
                    <span class="xs-separetor v3"></span>
                </div>
            </div>
            <!-- .row end -->
            @if($sponsors)
            <div class="row">
                @foreach ($sponsors as $sponsor)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5 single-item">
                    <a href={{ url("sponsor/$sponsor->id/details") }}>
                        <div class="xs-single-children">

                            <img src="{{url(Path::sponsors() . $sponsor->image)}}" alt="Sponsor Image">
                            <div class="xs-children-details">
                                <h4>Name: {{$sponsor->name}}</h4>
                                <h4>Age : {{$sponsor->age}}</h4>
                                <h4>${{$sponsor->amount}} Per Month</h4>
                                <div class="btn btn-primary">
                                    <span class="badge"><i class="fa fa-heart"></i></span> Sponsor Now
                                </div>
                            </div>
                            <!-- .xs-children-details END -->

                        </div>
                    </a>
                    <!-- .xs-single-children END -->
                </div>

                @endforeach
            </div>
            @endif

            <!-- .row end -->
            <div class="text-center">
                <a href="{{ url('/sponsor') }}" class="btn btn-success">
                    View More
                </a>
            </div>
        </div>
        <!-- .container end -->
    </section>


</main>



@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')
<script src="/assets/js/sponsor.js"></script>
@endsection