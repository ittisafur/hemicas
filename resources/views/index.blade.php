@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection
@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")

<!-- welcome section -->
@include ('frontend.welcome')
<!-- End welcome section -->
<input type="hidden" id="sessionData" value="{{ Session::get('isCart') }}">
<section class="xs-about-v2 mt-5">
    <div class="container-fulid">
        <div class="row no-gutters">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="xs-about-content">
                    <div class="xs-heading">
                        <h2 class="xs-title">Who We Are</h2>
                        <!--data-title="About"-->
                    </div>
                    <p class="for_web">Our mission at Hemica’s Angels for Humanity is to provide nutrition and healthcare for the underprivileged women and children of Bangladesh. We strive to provide for those that are the most vulnerable and easily looked over. Rahman Abanti Hemica, founder of Hemica’s Angels for Humanity, is a young entrepreneur born and raised in Bangladesh. As a native to Bangladesh, Hemica saw the desperate needs of the people of Bangladesh and has been motivated ever since to provide for those who are the most vulnerable: women and children. Hemica and her all-female Board of Directors, composed of successful business women in the United States, have come together to provide a voice for those that need it the most and make a difference in the lives of those that are unheard. This all-female Board has volunteered their time and efforts as they are inspired by the cause and goals of this non-profit organization and has made it their personal mission to ensure the women and children of Bangladesh are heard.  Hemica’s Angels for Humanity believes it is crucial for the world to come together and stop the deprivation of nutrition and healthcare for women and children in order to create a brighter future and world in which future generations have a chance to live a positive and fulfilling life.</p>
                    <span class="for_mbl">Our mission at Hemica’s Angels for Humanity is to provide nutrition and healthcare for the underprivileged women and children of Bangladesh. We strive to provide for those that are the most vulnerable and easily looked over.</span> 
                        <span id="collapseExample" class="collapse">Rahman Abanti Hemica, founder of Hemica’s Angels for Humanity, is a young entrepreneur born and raised in Bangladesh. As a native to Bangladesh, Hemica saw the desperate needs of the people of Bangladesh and has been motivated ever since to provide for those who are the most vulnerable: women and children. Hemica and her all-female Board of Directors, composed of successful business women in the United States, have come together to provide a voice for those that need it the most and make a difference in the lives of those that are unheard. This all-female Board has volunteered their time and efforts as they are inspired by the cause and goals of this non-profit organization and has made it their personal mission to ensure the women and children of Bangladesh are heard. Hemica’s Angels for Humanity believes it is crucial for the world to come together and stop the deprivation of nutrition and healthcare for women and children in order to create a brighter future and world in which future generations have a chance to live a positive and fulfilling life.</span>
                    <a href="#" class="color-burntOrange for_mbl" data-toggle="collapse" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="show_more" onclick="myFunctionclick()">Read More</a>
                    <br>
                
                </div>
                <div class="xs-about-content xs-about-feature new pt-0">
                    <div class="xs-heading">
                        <h2 class="xs-title">Our Mission</h2>
                    </div>
                    <p class=""> Hemica's Angels for Humanity’s mission is to combat hunger, and provide sustainable healthcare and educational resources for underprivileged women and children in Bangladesh.</p>
                </div>
                <div class=" xs-about-feature new">
                    <div class="xs-heading">
                        <h2 class="xs-title">Our Vision</h2>
                    </div>
                    <p class="">Our vision is to maximize the potential of a nation by reducing the risk of food insecurity, undernutrition and empowering the indigent women.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 content-center">
            <div class="xs-video-popup-wraper">
                    <img src="assets/images/WhatsApp Image 2020-09-18 at 12.52.33 (3).jpeg" alt="">
                    <div class="xs-video-popup-content">
                        <a href="https://www.youtube.com/watch?v=PPy7rDp3Fs4" target="_blank" class="xs-video-popup xs-round-btn">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- .xs-video-popup-content end -->
                </div>
                <!-- <div class="xs-about-content-img" style="background-image:url('assets/images/1804.jpg')"></div> -->
            </div>

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section class="xs-section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 col-md-12">
                <div class="xs-feature-text-content">
                    <div class="xs-heading">

                        <h3 class="xs-title">AT HEMICA’S ANGELS FOR HUMANITY, WE FOCUS ON MATERNITY CARE, BALANCED NUTRITION AND CHILD DEVELOPMENTAL PRACTICES IN UNDERPRIVILEGED COMMUNITIES IN BANGLADESH . TO ACHIEVE THIS, WE ADOPT A HOLISTIC APPROACH BY PROVIDING FOOD DONATIONS , FREE HEALTHCARE , EDUCATION AND EMPOWERING MOTHERS , CHILDREN IN THEIR SOCIAL ENVIROMENT</h3>
                        <span class="xs-separetor bg-bondiBlue"></span>
                    </div>

                </div>
                <!-- .xs-feature-text-content END -->
            </div>
            <section class="mbl_box">
                <div class="container-fulid">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="xs-donation-form-wrapermbl">
                                <div class="xs-heading xs-mb-30">
                                    <h2 class="xs-title">Make A Donation</h2>
                                    <span class="xs-separetor v2"></span>
                                </div>
                                <!-- .xs-heading end -->
                                <div class="donate-form-wrapper stripe-elements step-amount">
                                    <form autocomplete="off" data-logged-in-user="false" data-parsley-validate="true" data-store-utm-params-model="donation_form" id="the-spring_form" novalidate="" action="{{ url('donate')}}" method="get">
                                        <span class="adf-form-header text-center"><span>A $20 donation can feed a child for a month. Feel the peace of giving</span>

                                        </span>
                                        <div class="donate-form-body">
                                            <div id="myDIV">
                                                <div class="amount-wrapper">
                                                    <div class="amount-buttons-wrapper ">
                                                       
                                                        <ul class="nav nav-pills mb-3 customerul pl-3 inedx_box" id="pills-tab1" role="tablist">
                                                            <li class="nav-item donation-level-container">
                                                                <a class="nav-link active show button button--grey-20 amount-button" style="width: 140px;" id="pills-15" href="#pills-15" data-toggle="pill" aria-controls="pills-15"  role="tab"  aria-selected="true">$20 </a>
                                                            </li>
                                                            <li class="nav-item donation-level-container">
                                                                <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" id="pills-50" data-toggle="pill" href="#pills-50_1" role="tab" aria-controls="pills-50_1" aria-selected="false">$50 </a>
                                                            </li>
                                                            <li class="nav-item donation-level-container">
                                                                <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" id="pills-100" data-toggle="pill" href="#pills-100" role="tab" aria-controls="pills-100" aria-selected="false">$100</a>
                                                            </li>
                                                            <li class="nav-item donation-level-container">
                                                                <a class="nav-link button button--grey-20 amount-button" style="width: 140px;" id="pills-200" data-toggle="pill" href="#pills-200" role="tab" aria-controls="pills-200" aria-selected="false">$200 </a>
                                                            </li>
                                                            <li class="nav-item donation-level-container">
                                                                <a class="nav-link button button--grey-20 amount-button" id="pills-other" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" style="padding: 0;width: 300px;">
                                                                    <input data-amount="true" data-parsley-currency="5,50000" data-parsley-error-message="The monthly minimum donation is $5" data-parsley-errors-container=".donate-amount.bb16b09f-1f14-40af-87ac-265116f94dcb .error" name="amount" placeholder="Other " required="" step="1" type="number" value="">
                                                                    <br>
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>
                                            <button class="w-full show-next-donate-screen" id="donate-button">Donate Now</button>
                                        </div>
                                        <div class="inline-calculator text-xs text-cw-black p-2 border-dashed border-0 border-t border-grey-30 leading-normal"><span class="subtext">100% of the donation goes to the cause</span>
                                        </div>
                                    </form>
                                    <p class="leading-snug recaptcha-text text-center"><i class="cw-icon-lock"></i>Questions? Contact us at <a href="mailto:info@hemicasangels.org">info@hemicasangels.org</a> or call <a href="tel:+14752063976">+14752063976</a> </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-lg-5 col-md-12">
                <div class="xs-feature-image-box image-1">
                    <img src="assets/images/sidebar-2.png" alt="">
                </div>
                <div class="xs-feature-image-box image-2">
                    <img src="assets/images/sidebar-5.png" alt="">
                </div>
            </div>
        </div>
        <!-- .row END -->
        
    </div>
    <!-- .container END -->
</section>
<!-- End feature details section -->

<!-- popular causes version 2 section -->
@include('frontend.cause')
<!-- End popular causes version 2 section -->

<!-- text with image section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="xs-text-content xs-pr-20">
                    <h2 class="color-navy-blue">Welcome to the community of Angel Donors</h2>
                    <blockquote>
                    At Hemica’s Angels for Humanity, we love to celebrate our donors. If you have donated with us, you’ve been enrolled in our Angel Donor Community. For each donation, you’ll be awarded points. We take great joy in cheering on our donors as they reach incredible milestones of help to the vulnerable community Please join our angel donor community to get updates and make your giving more impactful.
                    </blockquote>
                    <a href="{{ url('registration')}}" class="btn btn-primary bg-light-red">
                        <span class="badge"><i class="fa fa-sign-in"></i></span> join us now
                    </a>
                    <a href="{{ url('donate')}}" class="btn btn-primary bg-light-red">
                        <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                    </a>
                </div>
                <!-- .xs-text-content END -->
            </div>
            
            <div class="col-md-12 col-lg-6">
                <div class="xs-feature-image">
                    <img src="assets/images/sidebar-portrait-4.png" alt="">
                </div>
                <!-- .xs-feature-image END -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- End text with image section -->

<!-- xs funfact section -->
<div class="xs-section-paddding xs-ipad-overlay xs-funFact-v3 waypoint-tigger" style="background-image: url('assets/images/backgrounds/2nd-banner-3.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="xs-funfact-content-wraper">
                    <div class="xs-heading">
                        <h2 class="xs-title">Know That You Are Making A Difference</h2>
                        <p>Your gifts, both large and small, will have a huge impact on the communities we serve. We believe strongly in the ripple effect - that every interaction can make a lasting impression on those involved. Thank you!
                              100% of a donation goes to the cause</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media xs-single-funFact-v3 ">
                                <div class="xs-feature-image">
                                <h2 class="xs-title text-center">Our Activity Module</h2>
                                

                                 <img src="assets/images/activity-model-10.png" alt="">
                                 <p class=" text-center mt-4"><b>100% donation goes to the cause is a separate ssentence</b></p>
                                 </div>
                            </div>
                            <!-- .xs-single-funFact-v3 END -->
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</div>
<!-- End xs funfact section -->

<!-- what we do section -->
<section class="xs-content-section-padding">
    <div class="container">
        <div class="  row ">
            <div class="col-md-12 col-xl-12">
                <div class="mb-5">
                    <h2 class="xs-title">Donate To The Cause You Believe In</h2>
                    <span class="xs-separetor dashed"></span>
                    <p>Small donations add up. It's not the size of the contribution that matters; what matters is the outcome your giving produces. Regardless of the amount we are able to contribute, the heart of the donor is what counts. 
                    Hemica's Angels for Humanity helps you support to the causes you believe in. Your donation will be served to the charities of your choice and the causes you care about  </p>
                    
                </div>
                <div>
                    <!-- <h2 class="xs-title">Donate to the causes :</h2> -->
                    
                </div>
            </div>
            <!-- .xs-heading-title END -->
            <!--<div class="col-xl-3 col-md-3 xs-btn-wraper">-->
            <!--    <a href="#" class="btn btn-primary bg-orange">all Causes</a>-->
            <!--</div>-->
            <!-- .xs-btn-wraper END -->
        </div>
        <!-- .row end -->
        @if($causes)
        <div class="row">
            @foreach ($causes as $cause)
            <div class="col-lg-4 col-md-6">

                <div class="xs-popular-item xs-box-shadow">
                    <div class="xs-item-header">

                        <img src="{{url(Path::causes() . $cause->image)}}" alt="Cause Image" >

                        <div class="xs-skill-bar">
                            <div class="xs-skill-track bg-light-red">

                            </div>
                        </div>
                    </div>
                    <!-- .xs-item-header END -->
                    <div class="xs-item-content">
                        <ul class="xs-simple-tag xs-mb-20">
                            <!-- <li><a class="color-light-red" href="#">
                                    {{$cause->cause}}
                                </a></li> -->
                        </ul>

                        <a href="#" class="xs-post-title xs-mb-30"> {{$cause->title}}</a>



                        <span class="xs-separetor"></span>


                    </div>
                    <!-- .xs-item-content END -->
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <!-- .row end -->
    </div>
    </div>
    </div>
    <!-- .container end -->
</section>
<!-- End what we do section -->

<!-- become a volunteer section -->
@include('frontend.volunteer')
<!-- End become a volunteer section -->


<!-- partners section -->
@include('frontend.partner')
<!-- End partners section -->


@include ('layouts.frontend.footer')


@endsection


@section('onpagejs')

<script type="text/javascript">
    // $(function() {

    //     setTimeout(function() {
    //         $('#successMsg').fadeOut('slow');
    //         $('#successMsgMb').fadeOut('slow');

    //     }, 5000);

    // });


    jQuery(function($) {
        $(document).ajaxStop(function() {
            $("#ajax_loader").hide();
        });
        $(document).ajaxStart(function() {
            $("#ajax_loader").show();
        });
    });


    function volunteerMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-volunteer"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    $('#signup').on('submit', function(e) {
        e.preventDefault();
        var that = this;
        var request = $.ajax({
            url: "signup/web",
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
        });

    });

    $('#login').on('submit', function(e) {
        e.preventDefault();
        var that = this;
        var request = $.ajax({
            url: "signup/web",
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
        });

    });

    $('#volunteer-form').on('submit', function(e) {
        e.preventDefault();
        var that = this;
        var request = $.ajax({
            url: "volunteer/store",
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
        });
        request.done(function(data) {
            volunteerMessageBox("Volunteer request successfully submitted.", data ? "success" : "danger");
            that.reset();
        });
        request.fail(function(data) {
            volunteerMessageBox("Volunteer request failed!", "warning");
        });
    });
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({

        loop: true,
        margin: 0,
        autoplay: true,
        smartSpeed: 500,
        // nav: true,
        dots: true,
        autoplayTimeout: 10000,
        lazyLoad: true,
        items: 1,
        autoplayHoverPause: true

    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
</script>
<script>
$(document).ready(function() {

  
$('[data-toggle="collapse"]').click(function() {
  $(this).toggleClass( "active" );
  if ($(this).hasClass("active")) {
    $(this).text("Read Less");
  } else {
    $(this).text("Read More");
  }
});
  
  
// document ready  
});
    function change(data) {
    if (data == "show_more") {
        $('.show_more').text('Learn More');
       
    }

    if (data == "hide") {
        $('.show_more').text('Learn Less');
    }

}
function myFunctionclick() {
  var x = document.getElementById("show_more");
  if (x.innerHTML === "Learn More") {
    x.innerHTML = "Learn Less";
  } else {
    x.innerHTML = "Learn More";
  }
}
</script>
@endsection