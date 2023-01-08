@extends("layouts.frontend.index")





@section("meta")

@include ('layouts.frontend.meta')

@endsection



@section("header")

@include ('layouts.frontend.header')

@endsection



@section("content")

<!--breadcumb start here-->

<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/banner-volunteer-1.png')">

    <div class="xs-black-overlay"></div>

    <div class="container">

        <div class="color-white xs-inner-banner-content">

            <h2>Volunteer</h2>

            <p>" Be the Rainbow in someone else's cloud "</p>



        </div>

    </div>

</section>

<!--breadcumb end here-->

<main class="xs-main">

    <!-- Volunteer section -->

    <section class="xs-section-padding">

        <div class="container">





            <div class="xs-heading row xs-mb-60">

                <div class="col-md-11 mx-auto text-center">

                    <h2 class="xs-title">Become a Volunteer</h2>

                    <p>Our organization is looking for dynamic volunteers to coordinate

                        fundraising teams, leverage community support, plan activities

                        and help our great cause! Please submit your application through

                        the Volunteer Recruitment Form below. Answering the following

                        questions will help us match your volunteer application with a

                        suitable volunteer role.</p>



                    <span class="xs-separetor v3"></span>

                    <div class="xs-fature-causes-deatils">



                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-lg-6">



                    <div class="xs-volunteer-form-wraper volunteer-version-2">



                        <i class="icon-support icon-watermark"></i>

                        <h2>Become a Volunteer</h2>

                        <p>We wholeheartedly appreciate your love and dedication towards

                            helping others. Thank you for your interest in volunteering and

                            supporting our organization&#39;s cause.</p>

                        <div class="alert-holder-volunteer"></div>

                        <form method="post" id="volunteer-form" class="xs-volunteer-form" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-lg-6">

                                    <input type="text" name="name" id="volunteer_name" class="form-control" placeholder="Your Name" required>

                                </div>

                                <div class="col-lg-6">

                                    <input type="email" name="email" id="volunteer_email" class="form-control" placeholder="Your Email" required>

                                </div>

                                <div class="col-lg-6">

                                    <input type="tel" name="phoneNumber" id="volunteer_phoneNumber" class="form-control" placeholder="Your Phone Number" required>

                                </div>

                                <div class="col-lg-6">

                                    <select name="branch" class="form-control" id="volunteer_branch">

                                        <option value="New york">New york</option>

                                        <option value="Washington">washington</option>

                                    </select>

                                </div>

                                <div class="col-lg-12">

                                    <select name="position" class="form-control" id="volunteer_position" required>

                                        <option value="">Choose volunteering position</option>

                                        <option value="Fundraising Volunteer Coordinator">Fundraising Volunteer Coordinator</option>

                                        <option value="Special Events Volunteer Coordinator">Special Events Volunteer Coordinator</option>

                                        <option value="Volunteer Administrative Coordinator">Volunteer Administrative Coordinator</option>

                                        <option value="Branding the organization">Branding the organization</option>

                                    </select>

                                </div>

                                <div class="col-lg-12 xs-mb-20">

                                    <div class="xs-fileContainer">

                                        <!--<input type="file" id="myfile" name="myfile">-->

                                        <input type="file" id="volunteer_cv" class="form-control" name="cv">

                                        <!--<label for="volunteer_cv">Upload Your CV</label>-->

                                    </div>

                                    <abbr title="Please upload only pdf file">PDF</abbr>

                                </div>

                            </div>

                            <!-- .row end -->

                            <textarea name="message" id="volunteer_message" placeholder="Enter your massage" cols="30" class="form-control" rows="10"></textarea>



                            <button type="submit" id="submit" class="btn btn-primary bg-green">apply now</button>

                            <div id='ajax_loader' style="display: none;">

                                <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img>

                            </div>

                        </form>

                        <!-- #volunteer-form .xs-volunteer-form END -->

                    </div>

                </div>

                <div class="col-lg-6">

                    <img src="assets/images/volunteer.jpg" alt="">

                </div>

            </div>

            <!-- .row end -->

        </div>

        <!-- .container end -->

    </section>

    <!-- End become a volunteer section -->

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

        });

    });

</script>

<script type="text/javascript">

    function volunteerMessageBox(data = '', type = "success") {

        var alertHolder = $(".alert-holder-volunteer"),

            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';



        alertHolder.html('');

        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');

    }





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



@endsection