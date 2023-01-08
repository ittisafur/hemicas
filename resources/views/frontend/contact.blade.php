@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("onpagecss")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">
@endsection

@section("content")
<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/contact_bg.jpg')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Contact Us</h2>
            <p>For any questions, suggestions, feedback or comments, please contact us</p>

        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->

<main class="xs-main">
    <!-- contact section -->
    <section class="xs-contact-section-v2">
        <div class="container">
            <div class="xs-contact-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="xs-contact-form-wraper">
                            <h4>Drop us a line</h4>
                            <form method="POST" id="xs-contact-form" class="xs-contact-form contact-form-v2">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" name="name" id="xs-name" class="form-control" placeholder="Enter Your Name.....">
                                    <div class="input-group-append name-icon">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                </div><!-- .input-group END -->

                                <div class="input-group">
                                    <input type="email" name="email" id="xs-email" class="form-control" placeholder="Enter Your Email.....">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                    </div>
                                </div><!-- .input-group END -->

                                <div class="input-group">
                                    <input type="tel" name="phoneNumber" id="xs-phoneNumber" class="form-control" placeholder="Enter Your Phone Number....." style="color: white;">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div><!-- .input-group END -->
                                <div class="input-group message-group">
                                    <textarea name="message" placeholder="Enter Your Message....." id="xs-message" class="form-control" cols="30" rows="10"></textarea>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                    </div>
                                </div><!-- .input-group END -->
                                <button class="btn btn-success" type="submit" id="xs-submit">submit</button>

                                <div id='ajax_loader' style="display: none;">
                                    <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img>
                                </div>
                            </form><!-- .xs-contact-form #xs-contact-form END -->
                        </div><!-- .xs-contact-form-wraper END -->
                    </div>
                    <div class="col-lg-6">
                        <div class="xs-maps-wraper map-wraper-v2">
                            <div class="xs-box-shadow-2">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.6602481736954!2d-73.93527758425468!3d40.85738257931629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f402d87fcb5f%3A0xed143898425d7ddb!2s213%20Bennett%20Ave%20%234C%2C%20New%20York%2C%20NY%2010040%2C%20USA!5e0!3m2!1sen!2sbd!4v1606916291256!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>

                </div><!-- .row end -->
            </div><!-- .xs-contact-container END -->
        </div><!-- .container end -->

    </section>
    <!-- End contact section -->
</main>



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