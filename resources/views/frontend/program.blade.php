@extends("layouts.frontend.index")


@section('meta')

    @include ('layouts.frontend.meta')
@endsection

@section('header')
    @include ('layouts.frontend.header')
@endsection
@section('onpagecss')
    <link rel="stylesheet" href="/assets/css/program.css">
@endsection
@section('content')

    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
        style="background-image:url('assets/images/backgrounds/banner-our-programs-3.png')">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Programs</h2>
                <p>" In this life we cannot always do great things. But we can do small things with great love. " </p>
                <p>–Mother Teresa</p>
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
                        <div class="mb-5">

                            <p class="prog_p">The first 1,000 days — from the start of a woman’s conception to two
                                years of her child’s age: is the time frame Hemica’s Angels of Humanity emphasizes as the
                                “window of opportunity” for nutrition. During this time, a child’s brain and body develop
                                rapidly. The 1,000-days approach is critical, for even if a child’s nutrition status
                                improves after the first two years of life, damage done during those early years is largely
                                irreversible.
                                <br>
                                Besides newborn health and services are closely linked to the care mother receives before
                                and during pregnancy, childbirth and postnatal period.
                                We work to prevent malnutrition by bringing a wide range of integrated interventions and
                                programs to mothers and children, delivered through health workers and volunteers in the
                                community and health staff at the health facility.
                            </p>
                            <h2 class=" xs-title text-center">Our Programs</h2>
                            <span class="xs-separetor dashed"></span>

                            <ul class="pro_ul">
                                <li class="color-burntOrange">Provide weekly nutritious food donation to the vulnerable
                                    community of mother and children</li>
                                <li class="color-burntOrange">Free healthcare, childbirth care, postpartum services,
                                    medication for the enrolled mothers and her children</li>
                                <li class="color-burntOrange">Educate the parents about newborn care </li>
                                <li class="color-burntOrange">Address adequate food and nutrient intake, effective feeding
                                    and care practices, and protection against infectious diseases</li>
                                <li class="color-burntOrange">support breastfeeding, appropriate complementary feeding at
                                    six months, food preparation, hygiene and health care-seeking</li>
                                <li class="color-burntOrange">Educate the mothers to improve access to essential
                                    micronutrients through fortification, supplementation and dietary diversity measures
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('free-checkup').style.display = 'block'" style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/free-checkup.jpg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-burntOrange">Free Health Checkup</h2>
                                    <p>Hemica's Angels for Humanity is always close to the continuation of the month-long
                                        free health check-up campaign organized by "Project Hasimukh" by Hemica's Angels for
                                        Humanity, One Pharma Limited, NAC No-Chinta Limited...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('project-hashimukh').style.display = 'block'"
                            style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/project-hashimukh.jpg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-burntOrange">Project Hashimukh</h2>
                                    <p>Activities of "Project Hasimukh" initiated by Himica's Angels for Humanity and One
                                        Pharma Limited.
                                        Food distribution program among thousands of people in different places outside
                                        Dhaka under "Project Hasimukh" with the aim of bringing smiles on the faces of
                                        disadvantaged people.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('distribution-food').style.display = 'block'"
                            style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/distribution-food.jpg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-burntOrange">Distribution of Free Nutritious Food</h2>
                                    <p>In the current Corona situation, providing safe and healthy food is an extreme
                                        challenge. To address this challenge, Hemica’s Angels for Humanity has launched
                                        “Project Hasimukh” in several places in Dhaka, including Bogra district and upazila,
                                        through which the foundation is distributing free nutritious food among the
                                        underprivileged....
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>


                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('Nutrition_Program').style.display = 'block'"
                            style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/food-high-in-protein-healthy-eating-and-diet-royalty-free-image-1599685935.jpg"
                                    alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-burntOrange">Nutrition Program</h2>
                                    <p>Our food donation program is about more than simply providing food. It’s about
                                        providing wellness, nourishment and strength. That’s why it’s our mission to provide
                                        the most nutritious food possible to improve underprivileged children...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('Nutrition').style.display = 'block'" style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/1.jpeg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-light-red">Nutrition and health education</h2>
                                    <p>Our Nutrition and Health Education Program helps families on a limited budget make
                                        healthier and nutritious food choices by acquiring the knowledge, skills, attitudes,
                                        and behavior changes necessary to improve their health...</p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('well_baby').style.display = 'block'" style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/2.jpeg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-purple">Baby wellness exam</h2>
                                    <p>It's important for any child to have regularly scheduled checkups. Our Well Baby
                                        Checkup Begins shortly after birth and lasting through the 15 years, Hemica’s Angels
                                        for Humanity provides free well baby checkup for the participants...</p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('MUAC').style.display = 'block'" style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/3.jpeg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-blue">Mid-Upper arm circumference (MUAC) test</h2>
                                    <p>MUAC is used for the assessment of nutritional status. Hemica’s Angels for Humanity
                                        health workers use MUAC with children between six and fifty-nine months of age and
                                        for assessing acute energy deficiency in adults.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('effective_counselling').style.display = 'block'"
                            style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/4.jpeg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-purple">Effective counselling during pregnancy</h2>
                                    <p>Hemica’s Angels of Humanity ensures Prenatal nutrition for healthy fetal growth. The
                                        counselling program is the reinforcement of basic or essential nutrition-related
                                        knowledge during pregnancy. </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div onclick="document.getElementById('FreeOBGYN').style.display = 'block'" style="width:auto;">
                            <div class="xs-single-causes">
                                <img src="assets/images/6.jpeg" alt="">
                                <div class="xs-causes-footer">
                                    <h2 class="color-yellow">Free OBGYN checkup and medications for women and children
                                    </h2>
                                    <p>Free OBGYN checkup and medication program is a social welfare program where Hemica’s
                                        Angels of Humanity provide access to medications, monthly outpatient OBGYN care.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .xs-single-causes END -->
                    </div>

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- End causes section -->
    </main>

    <div id="Nutrition" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">

                        <img src="assets/images/1.jpeg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Nutrition').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h2 class="color-light-red">Nutrition and health education</h2>
                            <p>Our Nutrition and Health Education Program helps families on a limited budget make healthier
                                and nutritious food choices by acquiring the knowledge, skills, attitudes, and behavior
                                changes necessary to improve their health. Our primary approach to coaching includes group
                                coaching sessions to guide the low-income families to find balance in their diet. The
                                learning programs are designed to facilitate the voluntary adoption of eating and other
                                nutrition-related behaviors conducive to health and well-being. We also educate the public
                                about the impact of hunger and malnutrition on the future economy through investment in
                                marketing and communications.</p>
                        </div>
                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>

    <div id="free-checkup" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/free-checkup.jpg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('free-checkup').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Free Health Checkup </h2>
                            <p>Hemica's Angels for Humanity is always close to the continuation of the month-long free
                                health check-up campaign organized by "Project Hasimukh" by Hemica's Angels for Humanity,
                                One Pharma Limited, NAC No-Chinta Limited.
                                Under this project, hundreds of people in different parts of Dhaka are given the facility of
                                free health check-up every week. Under this program, all classes of people are given free
                                health check-ups.


                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>

    <div id="project-hashimukh" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/project-hashimukh.jpg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('project-hashimukh').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Project Hashimukh </h2>
                            <p>Activities of "Project Hasimukh" initiated by Himica's Angels for Humanity and One Pharma
                                Limited.
                                Food distribution program among thousands of people in different places outside Dhaka under
                                "Project Hasimukh" with the aim of bringing smiles on the faces of disadvantaged people.


                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>


    <div id="distribution-food" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/distribution-food.jpg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('distribution-food').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Distribution of Free Nutritious Food </h2>
                            <p>In the current Corona situation, providing safe and healthy food is an extreme challenge. To
                                address this challenge, Hemica’s Angels for Humanity has launched “Project Hasimukh” in
                                several places in Dhaka, including Bogra district and upazila, through which the foundation
                                is distributing free nutritious food among the underprivileged. One Pharma Limited, one of
                                the leading pharmaceutical companies in Bangladesh, has extended its helping hand to make
                                this great initiative a success. The purpose of this “Project Hasimukh” is to bring laughter
                                among at least a few lakh disadvantaged people.In the current Corona situation, providing
                                safe and healthy food is an extreme challenge. To address this challenge, Hemica’s Angels
                                for Humanity has launched “Project Hasimukh” in several places in Dhaka, including Bogra
                                district and upazila, through which the foundation is distributing free nutritious food
                                among the underprivileged. One Pharma Limited, one of the leading pharmaceutical companies
                                in Bangladesh, has extended its helping hand to make this great initiative a success. The
                                purpose of this “Project Hasimukh” is to bring laughter among at least a few lakh
                                disadvantaged people.


                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>


    <div id="Nutrition_Program" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/food-high-in-protein-healthy-eating-and-diet-royalty-free-image-1599685935.jpg"
                            alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Nutrition_Program').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h2 class="color-burntOrange">Nutrition Program</h2>
                            <p>Our food donation program is about more than simply providing food. It’s about providing
                                wellness, nourishment and strength. That’s why it’s our mission to provide the most
                                nutritious food possible to improve underprivileged children and their mother’s health and
                                well-being.
                                Sourcing and distributing nutritious food that is essential to a healthy diet helps us best
                                meet the needs of the people we serve.
                                We provide weekly supply of freshly produced protein and vitamin-based food packages to
                                children and mothers in need. Regular follow up and progress monitoring activities are done
                                by our health care providers every month.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="well_baby" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/2.jpeg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('well_baby').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>

                        <div class="xs-causes-footer">
                            <h2 class="color-purple">Baby wellness exam</h2>
                            <p>It's important for any child to have regularly scheduled checkups. Our Well Baby Checkup
                                Begins shortly after birth and lasting through the 15 years, Hemica’s Angels for Humanity
                                provides free well baby checkup for the participants. At this exam, our health care
                                providers check the child's growth and development in order to find or prevent problems. The
                                providers record child's height, weight, and other important information. Hearing, vision,
                                and other screening tests are a part of some visits.</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="MUAC" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/3.jpeg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('MUAC').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>

                        <div class="xs-causes-footer">
                            <h2 class="color-blue">Mid-Upper arm circumference (MUAC) test</h2>
                            <p>MUAC is used for the assessment of nutritional status. Hemica’s Angels for Humanity health
                                workers use MUAC with children between six and fifty-nine months of age and for assessing
                                acute energy deficiency in adults. It allows the health workers to quickly determine if a
                                patient is acutely
                                MUAC of between 125mm (12.5cm) and 135mm (13.5cm), YELLOW COLOUR, indicates that the child
                                is at risk for acute malnutrition and should be counselled and followed-up for Growth
                                Promotion and Monitoring (GPM). MUAC over 135mm (13.5cm), GREEN COLOUR, indicates that the
                                child is well nourished.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="effective_counselling" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/4.jpeg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('effective_counselling').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>

                        <div class="xs-causes-footer">
                            <h2 class="color-purple">Effective counselling during pregnancy</h2>
                            <p>Hemica’s Angels of Humanity ensures Prenatal nutrition for healthy fetal growth. The
                                counselling program is the reinforcement of basic or essential nutrition-related knowledge
                                during pregnancy. Our certified healthcare providers pay a bi weekly visit to the expecting
                                mothers to maximize prenatal nutrition. After calculating the calorie and macronutrient
                                needs, the expecting mothers get the suggestions to emphasize rests and specific food
                                consumptions. The entire nutrition care process involves four steps: nutrition assessment,
                                nutrition diagnosis, nutrition intervention and nutrition monitoring and evaluation in a
                                stepwise manner</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="FreeOBGYN" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/6.jpeg" alt="" style="width: 100%;">
                        <div class="colse_div">
                            <span onclick="document.getElementById('FreeOBGYN').style.display = 'none'"
                                class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>


                        <div class="xs-causes-footer">
                            <h2 class="color-yellow">Effective counselling for increased rest and food intake during
                                pregnancy</h2>
                            <p>Hemica’s Angels of Humanity ensures prenatal nutrition for healthy fetal growth. The
                                counselling program is the reinforcement of basic or essential nutrition-related knowledge
                                during pregnancy. Our certified healthcare providers pay a bi weekly visit to the expecting
                                mothers to maximize prenatal nutrition. After calculating the calorie and macronutrient
                                needs, the expecting mothers get the suggestions to emphasize rests and specific food
                                consumptions. The entire nutrition care process involves four steps: nutrition assessment,
                                nutrition diagnosis, nutrition intervention and nutrition monitoring and evaluation in a
                                stepwise manner</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('Nutrition_Program');
        var modal1 = document.getElementById('Nutrition');
        var modal2 = document.getElementById('well_baby');
        var modal3 = document.getElementById('MUAC');
        var modal4 = document.getElementById('health_education');
        var modal5 = document.getElementById('FreeOBGYN');
        var span = document.getElementsByClassName("colse_div")[0];
        var btn = "";
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        //1st
        btn.onclick = function() {
            modal1.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal1.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }

        //2nd
        btn.onclick = function() {
            modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
        //3rd
        btn.onclick = function() {
            modal3.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal3.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
        }
        //4th
        btn.onclick = function() {
            modal4.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal4.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal4) {
                modal4.style.display = "none";
            }
        }
        //5th
        btn.onclick = function() {
            modal5.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal5.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal4) {
                modal5.style.display = "none";
            }
        }
    </script>


    @include ('layouts.frontend.footer')


@endsection
