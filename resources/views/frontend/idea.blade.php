@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/banner-share-idea-1.png')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Share Your Ideas</h2>
            <p>" We do not need magic to change the world, we carry all the power we need inside ourselves already: we have the power to imagine better."</p>

        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">
    <!-- causes section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-xl-12">
                    <div class="xs-event-content">
                        <h4 class="text-center">DO YOU HAVE AN IDEA?</h4>
                        <p>Your idea doesn't necessarily have to be totally new or revolutionary – or even original. It could simply be an improvement, a tweak, a development or something that adds value to our community. If you’re looking for ways to
                            make a difference this year, here is an easy way you can start. Share your amazing ideas, stories, thoughts about how to end hunger and malnutrition. We will evaluate and try our best to transform them in reality.</p>
                    </div>

                </div>
            </div>

            <div class="row ">
                <div class="col-md-12 col-xl-12">
                    <div class="xs-volunteer-form-wraper volunteer-version-3">
                        <i class="icon-support icon-watermark"></i>
                        <h2>SHARE YOUR IDEA WITH US?</h2>
                        <p>It only takes a minute to set up a campaign. Decide what to do. Pick a name. Pick a photo. And just like that, you’ll be ready to start raising money.</p>


                        <form action="#" method="POST" id="idea-form" class="xs-volunteer-form" enctype="multipart/form-data">
                            <div class="alert-holder-idea"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" id="volunteer_name" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" id="volunteer_email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="volunteer_name" name="location" class="form-control" placeholder="Your Location">
                                </div>
                                <div class="col-lg-6">
                                    <select name="age" class="form-control" id="volunteer_brach">
                                        <option value="">Select Your Age</option>
                                        <option value="20 to 30">20 to 30</option>
                                        <option value="30 to 40">30 to 40</option>
                                        <option value="40 to up">40 to up</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="text" id="Profession_name" name="profession" class="form-control" placeholder="Your Profession">
                                </div>
                                <div class="col-lg-6 xs-mb-20">
                                    <div class="xs-fileContainer">
                                        <!--<input type="file" id="myfile" name="myfile">-->
                                        <input type="file" id="volunteer_cv" class="form-control" name="idea_file">
                                        <!--<label for="volunteer_cv">Upload Your CV</label>-->
                                    </div>
                                    <abbr title="Please upload only pdf file">PDF</abbr>
                                </div>

                            </div>
                            <!-- .row end -->
                            <textarea name="message" id="message" placeholder="Share Your Idea" cols="30" class="form-control" rows="10" required></textarea>
                            <button type="submit" class="btn btn-primary bg-green">apply Your Ideas Here</button>

                            <div id='ajax_loader' style="display: none;">
                                <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img>
                            </div>
                        </form>
                        <!-- #volunteer-form .xs-volunteer-form END -->
                    </div>
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
    function ideaMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-idea"),
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


    $('#idea-form').on('submit', function(e) {
        e.preventDefault();
        var that = this;
        var request = $.ajax({
            url: "idea/store",
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
        });
        request.done(function(data) {
            ideaMessageBox("Thank you so much to submit your idea.", data ? "success" : "danger");
            that.reset();
        });
        request.fail(function(data) {

            ideaMessageBox("Idea is not submitted. Please try again.", "warning");
        });
    });
</script>

@endsection