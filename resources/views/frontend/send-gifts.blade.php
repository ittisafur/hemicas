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
    <section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/gift-banner-4.jpg')">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Send Gifts</h2>
                <p>"Give a helping hand for poor people"</p>

            </div>
        </div>
    </section>
    <!--breadcumb end here-->
    <!-- End welcome section -->
<main class="xs-main">
    <!-- causes section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-healthy-snacks-2.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-light-red">Healthy Snacks</h2>
                            <p>$3</p>
                            <p>In Balukhali Camp in Cox’s Bazar, Bangladesh.</p>
                            <a href="{{ url('donate')}}">
                                <div class="btn btn-primary mt-2">
                                    <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-health-supply-2.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-purple">Health Supplies</h2>
                            <p>$5</p>
                            <p>50 medical-grade face masks help protect frontline heroes.</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-school-donation-4.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-blue">Educational Supplies</h2>
                            <p>$5</p>
                            <p>Classroom essentials like books, workbooks and supplies</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-grocery-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-purple">Grocery Basket for a Family</h2>
                            <p>$5</p>
                            <p>A grocery basket for a family satisfies hunger</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-school-donation-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-yellow">Share of a Temporary School</h2>
                            <p>$5</p>
                            <p>Your support helps establish temporary schools to keep children learning</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-clean-water-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-yellow">Share of Clean Water Projects</h2>
                            <p>$4</p>
                            <p>Clean water projects are saving lives every day</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-seed-2.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Seeds and Tools</h2>
                            <p>$3</p>
                            <p>Quality seeds and tools like hoes, shovels and watering cans help parents grow</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="xs-single-causes">-->
                <!--        <img src="assets/images/causes/gift-goat-1.jpg" alt="">-->
                <!--        <div class="xs-causes-footer">-->
                <!--            <h2 class="color-burntOrange">Goat Farming Support</h2>-->
                <!--            <p>$100</p>-->
                <!--            <p>A goat farm brings great benefits to a family's business</p>-->
                <!--            <div class="btn btn-primary mt-2">-->
                <!--                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="xs-single-causes">-->
                <!--        <img src="assets/images/causes/gift-goat-and-chicken-1.jpg" alt="">-->
                <!--        <div class="xs-causes-footer">-->
                <!--            <h2 class="color-burntOrange">1 Goat and 2 Chicks</h2>-->
                <!--            <p>$80</p>-->
                <!--            <p>A goat and two chicks supply healthy milk and eggs</p>-->
                <!--            <div class="btn btn-primary mt-2">-->
                <!--                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="xs-single-causes">-->
                <!--        <img src="assets/images/causes/gift-cow-1.jpg" alt="">-->
                <!--        <div class="xs-causes-footer">-->
                <!--            <h2 class="color-burntOrange">1 Cow</h2>-->
                <!--            <p>$200</p>-->
                <!--            <p>Cows help cover daily survival costs supply protein-rich milk, health improves</p>-->
                <!--            <div class="btn btn-primary mt-2">-->
                <!--                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-chicken-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">1 Chicks</h2>
                            <p>$3</p>
                            <p>Chicks grow to produce protein-rich eggs that feed hungry children</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="xs-single-causes">-->
                <!--        <img src="assets/images/causes/gift-goat-2.jpg" alt="">-->
                <!--        <div class="xs-causes-footer">-->
                <!--            <h2 class="color-burntOrange">1 Sheep</h2>-->
                <!--            <p>$200</p>-->
                <!--            <p>Sheep’s wool, milk and fertilizer helps keep families warm, nourished</p>-->
                <!--            <div class="btn btn-primary mt-2">-->
                <!--                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-school-donation-2.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Educate a Girl</h2>
                            <p>$5</p>
                            <p>Education is the key to a girl’s freedom and bright future</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-winter-cloth-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Winter Clothing</h2>
                            <p>$5</p>
                            <p>Winter clothing helps children in the world’s coldest climates keep warm</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-blanket-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Blankets</h2>
                            <p>$4</p>
                            <p>Warm, insulated blankets protect newborns and babies who are forced into shelters and extreme conditions </p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-sanitization-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Sanitization Safety Kit</h2>
                            <p>$4</p>
                            <p>Sanitization Safety Kits protect families at greatest risk</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-parental-care-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-light-red">Prenatal Care</h2>
                            <p>$5</p>
                            <p>woman living in poverty, pregnancy is often a dangerous time.</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-orphan-care-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-purple">Orphan Care</h2>
                            <p>$5</p>
                            <p>Orphans and vulnerable children find comfort food, shelter, education </p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-causes">
                        <img src="assets/images/causes/gift-newborn-supply-1.jpg" alt="">
                        <div class="xs-causes-footer">
                            <h2 class="color-blue">Newborn Supplies</h2>
                            <p>$5</p>
                            <p>Newborn supplies in emergencies increase the chance of survival</p>
                            <div class="btn btn-primary mt-2">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </div>
                        </div>
                    </div>
                    <!-- .xs-single-causes END -->
                </div>
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="xs-single-causes">-->
                <!--        <img src="assets/images/causes/gift-water-tap-1.jpg" alt="">-->
                <!--        <div class="xs-causes-footer">-->
                <!--            <h2 class="color-blue">Water Pump</h2>-->
                <!--            <p>$5</p>-->
                <!--            <p>water pumps give farmers in harsh, rural climates the ability to adequately water crops</p>-->
                <!--            <div class="btn btn-primary mt-2">-->
                <!--                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End causes section -->

</main>



@include ('layouts.frontend.footer')


@endsection