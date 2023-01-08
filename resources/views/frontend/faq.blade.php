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

<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/WhatsApp Image 2020-09-18 at 12.52.33 .jpeg'); background-position: top;">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Frequently Asked Questions</h2>
            <!-- <p>Give a helping hand for poor people</p> -->
        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">
    <!-- newsletter section -->
    <!-- <div class="xs-newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-newsletter-content">
                        <i class="icon-telemarketer icon-watermark"></i>
                        <h5>How Do We Help?</h5>
                        <div class="xs-newsletter-form" id="xs-form">
                            <input type="text" id="keywords" name="newsletter" class="form-control" placeholder="Your questions.....">
                            <button type="button" class="btn btn-info find_first"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
 
    </div> -->
    <!-- End newsletter section -->

    <!-- newsletter section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="row mx-auto">

                <div id="content" class="hfeed">
                    <div class="post-908 page type-page status-publish hentry entry">
                        <!-- <h1 class="entry-title xs-title">Frequently Asked Questions</h1> -->
                        <!-- <div class="entry-content" id="playground"> -->
                        <!-- <span>
                                    <a name="0"></a>
                                </span> -->
                        <!-- <div> -->

                        <!-- @foreach($faqs as $faq)
                                    @foreach($sections as $section)

                                    @if($section->id == $faq[0]->section)
                                    <h4 class="xs-title">{!! $section->name !!}</h4>
                                    @endif
                                    @endforeach

                                    @foreach($faq as $f)
                                    <ul>
                                        <li><a href="#{{$f->id}}">{!!$f->question!!}</a>
                                        </li>
                                    </ul>
                                    @endforeach
                                    @endforeach

                                    <hr>

                                    @foreach($faqs as $faq)
                                    @foreach($sections as $section)

                                    @if($section->id == $faq[0]->section)
                                    <h4 class="xs-title">{!! $section->name !!}</h4>
                                    @endif
                                    @endforeach -->

                        @foreach($faq as $f)

                        <!-- <p>
                                        <a name="{{$f->id}}"></a>
                                    </p> -->

                        {!!$f->question!!}

                        <span class="fa fa-share" style="display: flex; padding-bottom: 30px;"> &nbsp; &nbsp;{!!$f->answer!!}</span>

                        <!-- <p class="xs-title"><a href="#0">^</a></p> -->
                        @endforeach
                        <!-- @endforeach -->

                        <!-- </div>
                            </div> -->
                    </div>

                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div  class="col-xl-12 p-0">
                        <div class="content2 ">
                            <div class="xs-contact-form-wraper">
                                <h4 style="color: black; text-align: center; padding-top: 10px;">Do you have any question ?  </h4>
                                <form method="POST" id="xs-contact-form" class="xs-contact-form contact-form-v2">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="text" name="name" id="xs-name" class="form-control" placeholder="Enter Your Name....." style="color: black;">
                                        <div class="input-group-append name-icon">
                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div><!-- .input-group END -->
    
                                    <div class="input-group">
                                        <input type="email" name="email" id="xs-email" class="form-control" placeholder="Enter Your Email....." style="color: black;">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div><!-- .input-group END -->
    
                                    <div class="input-group">
                                        <input type="tel" name="phoneNumber" id="xs-phoneNumber" class="form-control" placeholder="Enter Your Phone Number....." style="color: black;">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div><!-- .input-group END -->
                                    <div class="input-group message-group">
                                        <textarea name="message" placeholder="Enter Your Query....." id="xs-message" class="form-control" cols="30" rows="10" style="color: black;"></textarea>
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
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- End newsletter section -->
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

<!-- <script>
    window.addEventListener("DOMContentLoaded", function(e) {
        var myHilitor2 = new Hilitor("playground");
        myHilitor2.setMatchType("left");
        document.getElementById("keywords").addEventListener("keyup", function(e) {
            myHilitor2.apply(this.value);
            console.log(this.value);
        }, false);
    }, false);

    var searchBtn = document.querySelector('.find_first');
    searchBtn.addEventListener('click', function() {
        console.log(document.getElementById('keywords').value);
        var elem = document.getElementsByTagName("mark")[0];
        elem.scrollIntoView();
    });
</script> -->
@endsection