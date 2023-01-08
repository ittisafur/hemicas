@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")

<main class="xs-main">


    <!-- call to action section -->
    <section class="parallax-window xs-call-to-action-section" style="background-image: url('assets/images/backgrounds/banner-our-vision-1.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="xs-call-to-action">
                        <div class="color-white xs-inner-banner-content">
                            <h2 class="">Our Vision</h2>

                        </div>
                        <h3>Our vision is to maximize the potential of a nation by reducing the risk of food insecurity, undernutrition and empowering the indigent women.</h3>
                        <div class="xs-btn-wraper">

                            <a href="{{ url('donate')}}" class="btn btn-success new_donate_button">
                                Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
        <div class="xs-black-overlay"></div>
    </section> <!-- End call to action section -->

</main>



<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/spectragram.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script> -->

<script src="assets/js/main.js"></script>


@endsection