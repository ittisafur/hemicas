@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("onpagecss")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">
<link href="{{ asset('assets/css/cloth.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">

<style>
    .select2-container {
        box-sizing: border-box;
        display: inline;
        margin: 0;
        position: relative;
        vertical-align: middle;
    }
    
    .select2-container--default .select2-selection--multiple .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: bold;
        margin-top: 5px;
        margin-right: 0px;
    }
    
    .select2-container .select2-search--inline {
        float: none;
    }
    
    .select2-container .select2-selection--multiple {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        max-height: 50px;
        user-select: none;
        -webkit-user-select: none;
        overflow: hidden;
    }
    
    .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
        list-style: none;
        /* font-size: 16px; */
    }
    
    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 1px solid #e9e9e9;
        border-radius: 4px;
        cursor: text;
    }
    
    .select2-container .select2-search--inline .select2-search__field {
        box-sizing: border-box;
        border: none;
        font-size: 100%;
        margin-top: -4px;
        padding: 0 20px;
    }
    
    .select2-results__option {
        padding-right: 20px;
        vertical-align: middle;
        font-size: 16px;
    }
    
    .select2-results__option:before {
        content: "";
        display: inline-block;
        position: relative;
        height: 22px;
        width: 20px;
        border: 2px solid #e9e9e9;
        border-radius: 4px;
        background-color: #fff;
        margin-right: 20px;
        vertical-align: middle;
    }
    
    .select2-results__option[aria-selected=true]:before {
        font-family: fontAwesome;
        content: "\f00c";
        color: #fff;
        background-color: #18bfc3;
        border: 0;
        display: inline-block;
        padding-left: 2px;
    }
    
    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #fff;
    }
    
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #eaeaeb;
        color: #272727;
        font-size: 16px;
    }
    
    .select2-container--default .select2-selection--multiple {
        margin-bottom: 10px;
    }
    
    .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
        border-radius: 4px;
    }
    
    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #e9e9e9;
        border-width: 2px;
    }
    
    .select2-container--default .select2-selection--multiple {
        border-width: 2px;
    }
    
    .select2-container--open .select2-dropdown--below {
        border-radius: 6px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    
    .select2-selection .select2-selection--multiple:after {
        content: 'hhghgh';
    }
    /* select with icons badges single*/
    
    .select-icon .select2-selection__placeholder .badge {
        display: none;
    }
    
    .select-icon .placeholder {
        display: none;
    }
    
    .select-icon .select2-results__option:before,
    .select-icon .select2-results__option[aria-selected=true]:before {
        display: none !important;
        /* content: "" !important; */
    }
    
    .select-icon .select2-search--dropdown {
        display: none;
    }
    
    @media (max-width: 767px) {
        .select2-container .select2-selection--multiple {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            max-height: 50px;
            user-select: none;
            -webkit-user-select: none;
            overflow-y: scroll;
        }
        .select2-container .select2-selection--multiple .select2-selection__rendered {
            display: inline-block;
            overflow: visible;
            padding-left: 8px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    }
</style>
@endsection

@section("content")


    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window donate_items">
        <div class="xs-black-overlay"></div>
        <div class="container">
         
        </div>
    </section>
    <!--breadcumb end here-->
    <!-- End welcome section -->

<main class="xs-main">
    <section class="xs-section-padding">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-xl-12">
                    <div class="xs-event-content">
                        <h4 class="text-center">Is your desire simply to help those in the greatest need?</h4>
                        <p> Your support can help share hope and meet the needs of people across Bangladesh. At Hemica's Angels For Humanity, we provide you the opportunity to donate your used/ unused belongings. When you donate your old or gently used
                            items to us, we will send them to those in most need</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div><img src="{{ asset('assets/images/400x350/step-400x350-1.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="xs-service-promo promo  ">

                        <h5>Step 1:</h5>
                        <p>Gather your goods</p>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div><img src="{{ asset('assets/images/400x350/step-400x350-2.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="xs-service-promo promo">
                        <h5>Step 2:</h5>
                        <p>Check it over</p>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div><img src="{{ asset('assets/images/400x350/step-400x350-3.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="xs-service-promo promo">
                        <h5>Step 3:</h5>
                        <p> Contact us</p>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div><img src="{{ asset('assets/images/400x350/step-400x350-4.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="xs-service-promo promo">
                        <h5>Step 4:</h5>
                        <p>When you donate your old or gently used items, hemica's angels for humanity will send them to thoes in most need</p>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div><img src="{{ asset('assets/images/400x350/step-400x350-5.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="xs-service-promo promo">
                        <h5>Step 5:</h5>
                        <p>we will notify you once your gifts are sent</p>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>


    <!-- cloth section -->
     <section>
        <div class="container">

            <div class="row ">
                <div class="col-md-12 col-xl-12">
                    <div class="xs-volunteer-form-wraper volunteer-version-3">
                        <i class="icon-support icon-watermark"></i>
                        <h2>Donate your used/ unused cloths and household goods</h2>
                        <p>When you donate your old or gently used items, hemica's angels for humanity will send them to thoes in most need.</p>
                        <form action="#" method="POST" id="cloth-form" class="xs-volunteer-form">
                            <div class="alert-holder-cloth"></div>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email"  name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" name="phoneNumber"  class="form-control" placeholder="Enter Your Phone Number....." style="color: white;" required>
                                   
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="address" class="form-control" placeholder="Your Address" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="location"class="form-control" placeholder="Pick Up Location" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" name="pickupDate" value="" data-toggle="tooltip" title="Pick up date" placeholder="When do you want to donate" required>
                                </div>
                                <div class="col-lg-12">
                                    <div class="multiselect selectBox">
                                        <select class="js-select2 form-control" name="items[]" multiple="multiple" placeholder="Select Your Items" required>
                                            <option value="Clothes" data-badge="">Clothes</option>
                                            <option value="Shoes" data-badge="">Shoes</option>
                                            <option value="Food" data-badge="">Food</option>
                                            <option value="Furniture" data-badge="">Furniture</option>
                                            <option value="Utensils" data-badge="">Utensils</option>
                                            <option value="Toys" data-badge="">Toys</option>
                                            <option value="Others" data-badge="">Others</option>
                                            
                                        </select>

                                    </div>

                                </div>


                            </div>
                            <!-- .row end -->
                            <textarea name="comment" placeholder="Share Your Comment" cols="30" class="form-control" rows="10" required></textarea>
                            <p class="TEXT_P">CURRENTLY THIS SERVICE IS ONLY APPLICABLE IN BANGLADESH.</p>
                            <button type="submit" class="btn btn-primary bg-green">SCHEDULE A FREE PICK UP</button>
                            <div id='ajax_loader' style="display: none;">
                                <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img> </div>
                        </form>
                        <!-- #volunteer-form .xs-volunteer-form END -->
                    </div>
                </div>
            </div>

            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <!-- End cloth section -->
</main>



@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')


<script src="{{ asset('assets/js/cloth.js') }}" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript">
    function clothMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-cloth"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            )
        }
    });


    $('#cloth-form').on('submit', function(e) {
        e.preventDefault();
        var that = this;
        var request = $.ajax({
            url: "cloth/store",
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
        });
        request.done(function(data) {
            clothMessageBox("Thank you so much for donating goods. We will contact you shortly.", data ? "success" : "danger");
           
        that.reset();
        setTimeout(function() {
        location.reload();
            }, 5000);
        });
        request.fail(function(data) {

            clothMessageBox("Error! Please try again.", "warning");
        });
    });
</script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ajaxStop(function() {
            $("#ajax_loader").hide();
        });
        $(document).ajaxStart(function() {
            console.log("sad");
            $("#ajax_loader").show();
            document.getElementById("cloth-form").reset();
        });
    });
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/js/intlTelInput.js"></script> --}}

{{-- <script>
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
</script> --}}
@endsection