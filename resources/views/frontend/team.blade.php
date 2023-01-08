@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section('onpagecss')
<link rel="stylesheet" href="assets/css/team.css">
@endsection

@section("content")

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/banner-team-page-1.png')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>Our Team</h2>
            <p>" Tough times don’t last. Tough teams do."</p>

        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">
    <!-- team section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="xs-heading row ">
                <div class="col-md-9 col-xl-9">
                    <h2 class="xs-title">OUR BOARD MEMBERS</h2>
                    <span class="xs-separetor dashed"></span>
                </div>
                <!-- .xs-heading-title END -->
            </div>
            <div class="row xs-mb-60">
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Rahman_abanti_Hemic').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-abanti-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Rahman Abanti Hemica</h4>
                            <small>Founder and president</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-red" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Carole_Acunto').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-carole-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Carole Haarmann Acunto</h4>
                            <small>Secretary</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Deborah').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-deborah.png" alt="">
                        <div class="xs-team-content">
                            <h4>Deborah Hamilton</h4>
                            <small>Treasurer</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Ashley_Hu').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-ashley-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Ashley Hu</h4>
                            <small>Advisory board</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Nazmun_Naher').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/16_content_2.png" alt="">
                        <div class="xs-team-content">
                            <h4> Nazmun Naher</h4>
                            <small>Director, Operation in BD</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

            </div>
            <div class="xs-heading row xs-mb-60">
                <div class="col-md-9 col-xl-9">
                    <h2 class="xs-title">OUR PROJECT COORDINATORS</h2>
                    <span class="xs-separetor dashed"></span>
                    <p>Our team is made up of successful young professionals of integrity from all works of life who are desirous to create more love and positive impacts on lives</p>
                </div>
                <!-- .xs-heading-title END -->
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Nusrat_Durdana').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-nusrat-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Nusrat Durdana</h4>
                            <small>Public Relation Manager</small>
                            <small>Dhaka, Bangladesh</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Rafi').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-rafi-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>MD Rafiul Karim</h4>
                            <small>Public Relation Manager</small>
                            <small>New York, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Chelsee_Wilson').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-chelsee-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Chelsee Wilson</h4>
                            <small>Fundraising Manager</small>
                            <small>Chicago, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Samira_Mawla').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-samira-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Samira Mawla</h4>
                            <small>Fundraising Manager </small>
                            <small>Greenville, South Carolina</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Sean_McReynolds').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-sean-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Sean McReynolds</h4>
                            <small>Fundraising Manager </small>
                            <small>Chicago, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('XiwenLi').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-xiwens-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Xiwen Li </h4>
                            <small>Fundraising Manager</small>
                            <small>Beijing, China</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-riptide" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Yalid_Bin_Rahman').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-yalid-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Yalid Bin Rahman</h4>
                            <small>Campaign Manager</small>
                            <small>Minneapolis, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-yellow" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Kaniz_Fatima').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/181-(2).png" alt="">
                        <div class="xs-team-content">
                            <h4> Kaniz Fatima</h4>
                            <small>Campaign Manager</small>
                            <small>New York, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Jannatun_Akhund').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-jannatun-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Jannatun Akhund</h4>
                            <small>Fundraiser Coordinator</small>
                            <small>New York, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Pushpita_Roy').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-pushpita-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Pushpita Roy</h4>
                            <small>Campaign Coordinator</small>
                            <small>Glasgow , Scotland</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"></path>
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-mb-50" onclick="document.getElementById('Megha_singh').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-megha-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Megha singh</h4>
                            <small>Campaign Coordinator</small>
                            <small>London, England</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Romana_Afroz').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-romana-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Romana Afroze</h4>
                            <small>Campaign Coordinator</small>
                            <small>Dhaka, Bangladesh</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Tahsin_Firoza_Khan').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-tahsin-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Dr. Tahsin Firoza Khan (Amina)</h4>
                            <small> Project Coordinator</small>
                            <small>Dhaka, Bangladesh</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('DR_ANIL_PASUPULETI').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-anil-2.png" alt="">
                        <div class="xs-team-content">
                            <h4>DR. Anil Pasupuleti Md</h4>
                            <small>Program Coordinator</small>
                            <small>Miami, USA</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team" onclick="document.getElementById('Munzerin_Mohiuddin').style.display = 'block'" style="width:auto;">
                        <img src="assets/images/team/t-munzerin-1.png" alt="">
                        <div class="xs-team-content">
                            <h4>Munzerin Mohiuddin</h4>
                            <small>Marketing and communication coordinator</small>
                            <small>Dhaka, Bangladesh</small>
                            <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                <path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                            </svg>
                        </div>
                        <!-- .xs-team-content END -->
                    </div>
                    <!-- .xs-single-team END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('volunteer-create')}}">
                        <div class="xs-single-team">
                            <img src="assets/images/team/team_8.png" alt="">
                            <div class="xs-team-content">
                                <h4>Join Now</h4>
                                <small>Want to join with us</small>
                                <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
                                    <path class="fill-navy-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
                                </svg>
                            </div>
                            <!-- .xs-team-content END -->
                        </div>
                    </a>
                    <!-- .xs-single-team END -->
                </div>

            </div>
            <!-- .row END -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End team section -->
    <div id="Rahman_abanti_Hemic" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-abanti-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Rahman_abanti_Hemic').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Rahman Abanti Hemica</h4>
                            <small>Founder and president</small>
                            <p>My name is Rahman Abanti Hemica. I was born in Bangladesh. After completing my Bachelor’s from China and MBA from Chicago, I joined my family business (<a href="https://nationalagricare.com/">National Agricare Group</a> and <a href="https://onepharmaltd.com/"> One Pharma</a>) as the Director of Finance and International Marketing. I am passionate about women empowerment. National economic growth is impossible without participation of both men and women. Goals cannot be achieved without ensuring good health. Hence the idea of investing in nutrition appears. Good nutrition changes lives and enables growth, development and greater prosperity for a child. It enables children to grow to their full potential and triggers positive social and economic changes in countries and across generations. The children below fifteen years today will join the working group within the next 20 years. Therefore, malnourished kids will grow up as a malnourished adult who won’t be productive or competitive enough to add value in our national economy. The nutrition status of pregnant mothers is also a factor. Therefore, if the proper precautions are not taken to protect the mothers and children’s health, it can jeopardize the future of these children and affect the future economy of our country. Hemica’s Angels for Humanity is founded in 2020 as a grassroots organization with the idea of bringing good health and nutrition intervention for women and children in vulnerable communities of Bangladesh. Although our immediate initiative focuses on malnutrition and healthcare, the greater future aspirations of this foundation is to support unprivileged women and children to attain their basic necessities in order to facilitate their development and livelihood
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Carole_Acunto" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-carole-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Carole_Acunto').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Carole Haarmann Acunto</h4>
                            <small>Secretary</small>
                            <p>Carole Haarmann Acunto is a Partner in CINN Group, Inc. a family owned company with holdings in insurance, publishing, and entertainment; she has served as the group’s CFO since 1988.

                                <br>In 2012, she assumed responsibility for CINN’s newly formed entertainment business, co-producing two off Broadway shows, films that appeared in film festivals such as Sundance and Edinburgh and she assumed charge of the Companies’ classical concert series at venues that include Carnegie Hall, Lincoln Center, and several locations in the EU. She formed Measure Media, Inc. in 2015 to set a path for the Company in television and serves as its President. The Company and has begun producing original programs for international distribution. Currently airing on A&E Network (FYI Channel) is “Platinum Eye”, a show about all things luxury. In development is “Back from the Brink”, set to premiere on Discovery in 2021, featuring the true stories of people who have survived catastrophic physical trauma and have had to overcome most challenging adversity … to persevere and succeed.

                                <br> As founder and leader of CINN’s national Association Management Division and its 60 employees from 1988 to 2014, Mrs. Acunto served as chief administrator of the home offices of 24 national and regional financial, law and insurance nonprofit associations. As an advocate in the fight to combat insurance fraud and as an exponent of fairness in the insurance claims settlement process, Mrs. Acunto appeared nationally in televised media, before hearings and editorial boards to argue for high standards in battling fraud. Her efforts resulted in changes in laws and procedures affecting US insurance buyers favorably. She received many top professional awards for her achievement as an executive, including an MBA honoris causa from the Buckingham University / European School of Economics and the highest awards given by several insurance associations.

                                <br> Socially, Mrs. Acunto served for 3 years as Chair of New York’s annual Quadrille Ball, a debutante styled gala benefitting Columbia University student scholarships and the Germanistic Society; she served on the Ball Committee for 20 years. To raise funds in support of career programs for returning US Marines, she created the Bal d’ Europe and led it from 2007 to 2009. Mrs. Acunto chaired the first Savoy Ball in 2004 in New York, honoring Prince Victor Emmanuel of Savoy; she was honored with investiture in the Order of Saints Maurice and Lazarus, the dynastic and religious order of the House of Savoy, as Dama di Commenda.

                                <br>Mrs. Acunto has been recognized widely as a volunteer and advocate on the Executive Board of the UN Women for Peace Committee- for which she co-directed production of the first worldwide broadcast international Women For Peace Concert Gala held in the General Assembly in March, 2008; for the UN General Assembly “Women’s Day Celebration and on the “Annual March in March” which raises awareness and funds to prevent worldwide violence against women. She served on the Board of the City University of New York, Performing Arts Center and served as an Officer and Director on the Board of the National Women’s Republican Club for nine years, 2015 - 2014. She has been the subject of features in New York magazine, the NY Times, the Journal News, ABC news and several other media in connection with her volunteer activities and dedicated advocacy.

                                <br>Mrs. Acunto was born in Manhattan and is daughter of the late WWII Naval hero, Capt. Richard G. Haarmann, and the late fashion model / actress, Dorothy Warren. She attended Parsons School of Design (now NYU). Mr. and Mrs. Acunto have two married children living in Princeton and Rome, and three grandsons. They divide their time between Greenwich, Palm Beach and Rome.

                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Deborah" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-deborah.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Deborah').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Deborah Hamilton</h4>
                            <small>Treasurer</small>
                            <p>Deborah Hamilton has spent her entire career in the financial services industry having founded
                                her own investment advisory firm, Hamilton Advisors Inc., in 1980. She currently serves as
                                President. Additionally, she is the Executive Director of the Business Insurance Foundation
                                overseeing its Women to Watch Foundation and its Diversity and Inclusion Institute.
                                Over the years Deborah has been active in her community hosting a radio talk show and serving
                                on the boards and executive committees of numerous non-profit organizations. Currently she is
                                the Treasurer of the American Society of Friends of Teatro alla Scala and is a trustee of the
                                College of Mount Saint Vincent.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Ashley_Hu" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-ashley-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Ashley_Hu').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Ashley Hu</h4>
                            <small>Advisory board</small>
                            <p></p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Nusrat_Durdana" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-nusrat-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Nusrat_Durdana').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Nusrat Durdana</h4>
                            <small>Public Relation Manager</small>
                            <p>
                                DR. NUSRAT DURDANA, is a successful doctor, growing up. She was always passionate about becoming a doctor DR Durdana aimed towards turning her dreams into her vision and her vision into her reality. She completed her MBBS and internship from Holy family Red Crescent Medical College and Hospital, Dhaka, Bangladesh. During her work, she was able to provide supervisor care and consultation that resulted in an overall improvement of the departments of patient ‘s satisfaction quotient. She focused on the patent's treatment and re-evaluated several methods of surgical managements dependent on disease type tailored to a patient's individual, patient's history and efficacy of previous treatments. She herself conducted Breast Cancer Awareness Programme in 2017, Dhaka, Bangladesh and also participated in 3rd International Conference and Live surgery on Sleep Apnoea 2017 organized by Association of surgeons for Sleep Apnoea, Bangladesh. She served Rohingya refugees at the field hospital ran by International federation of Red Cross and Red Crescent Societies (IFRC). IFRC appreciates Dr. Durdana's services provided to the people from Myanmar and host community in a very difficult circumstance and in excellent co-operation with international ERU medical team in 2018. DR Durdana has performed several seminars under CME (Centre for medical education), she also presented her own journal on IBS (Irritable Bowel syndrome) in the following year. Dr. Durdana also earned a respectable position at Delta Medical College & Hospital LTD Dhaka, Bangladesh while teaching the medical students. Her strong interpersonal and communication skills have been used while treating patients and helping medical students with practical skills. Dr Durdana is a part of a successful team that can make a real difference to people's lives.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Rafi" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-rafi-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Rafi').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>MD Rafiul Karim </h4>
                            <small>Public Relation Manager</small>
                            <p>MD Rafiul Karim is a junior at Rochester Institute of Technology studying Biomedical Engineering. He’s always been interested and passionate about community service ever since High-school. He is serving as the President of the Bangladeshi Student Association at his university. He has done an internship at a bio pharmaceutical company called Bristol Myers Squibb which specializes in cancer medicine production. Rafi believes in being the change he wants to see in the world.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Jannatun_Akhund" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-jannatun-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Jannatun_Akhund').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Jannatun Akhund</h4>
                            <small>Fundraiser Coordinator</small>
                            <p>My name is Jannatun Akhund and I am a senior at the Academy of Mount Saint Ursula. I always knew that I wanted to help people but I did know-how. When I first heard about Hemica’s Angels for Humanities, I immediately knew there could not be a better way to give back to the community. I know that through Hemica’s Angles for Humanities the lives of countless women and children have been uplifted, and to me, that is the biggest reward.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Pushpita_Roy" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-pushpita-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Pushpita_Roy').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Pushpita Roy</h4>
                            <small>Campaign Coordinator</small>
                            <p>I am a physician-scientist. My patient is my first concern. I want to draw myself to the opportunities which my patients' clinical challenges bring to science. I aim to implement my research knowledge in the field of medicine to cure the sick community and regain the state of health and well-being, along with spreading awareness amongst the poor and helpless masses for the various ways to maintain the rhythm of a healthy life. The work this organization undertakes has interested and impressed me, and the culture of support they have created for helping underprivileged people is one that I would love to be a part of.
                                --
                                MBBS (University of Dhaka)
                                MSc (University of Glasgow, UK)
                                Honorary Medical Officer, Internal Medicine
                                Dhaka Medical College and Hospital

                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Chelsee_Wilson" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-chelsee-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Chelsee_Wilson').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Chelsee Wilson</h4>
                            <small>Fundraising Manager</small>
                            <p>My name is Chelsee Wilson and I specialize in Graphic Design and Communication. Growing up in areas of poverty, I became passionate about providing resources to those who otherwise would go without. It is my firm stance that life is meant to be lived for the well-being of others, and I get the opportunity to act on that with every new day.


                                -Chelsee Wilson

                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Megha_singh" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-megha-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Megha_singh').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Megha singh</h4>
                            <small>Campaign Coordinator</small>
                            <p></p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Samira_Mawla" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-samira-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Samira_Mawla').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Samira Mawla</h4>
                            <small>Fundraising Manager</small>
                            <p>Samira is a native Bangladeshi. She earned her bachelor's in Industrial and Systems Engineering from NC State and is currently working at General Electric (GE) as an advanced manufacturing engineer. Throughout her academic and professional life, she has been involved in various community service activities including volunteering at the humane society, after school programs as well as food pantries for the underprivileged. Her passions include sustainable green energy, access to clean water and food, justice for women children and animal welfare. A quote that she likes to live by is: “Service to others is the rent you pay for your room here on earth.” – Mohammed Ali
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Sean_McReynolds" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-sean-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Sean_McReynolds').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Sean McReynolds</h4>
                            <small>Fundraising Manager </small>
                            <p>My name is Sean McReynolds, I am a 2017 graduate of Concordia University Chicago. I am currently pursuing a double Masters' degree in history and I hoping to one day work in a museum someday. I have always had a passion for helping other people ever since I was young. I was raised to "love my neighbor as myself" and by supporting this foundation I hope to help as many people as I can. </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="XiwenLi" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-xiwens-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('XiwenLi').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Xiwen Li </h4>
                            <small>Fundraising Manager</small>
                            <p>My name is Xiwen Li, I have been studying classical music for my whole life, until I realized my biggest passion is to help people, that’s why I decided to devote myself to humanitarian field. I had a chance to travel to over 90 countries before I graduated from college, now I’m ready to take off for new adventures and to inspire more people.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Yalid_Bin_Rahman" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-yalid-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Yalid_Bin_Rahman').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Yalid Bin Rahman</h4>
                            <small>Campaign Manager</small>
                            <p>Yalid is currently doing a Bachelor’s of Science in Economics and computer science at the University of Minnesota. Yalid is keen on working towards poverty reduction and a sustainable development in his home country, Bangladesh. He is very passionate about Development Economics and works hard to come up with innovative ideas to reduce poverty in small communities. Throughout his academic life, he has engaged in community services such as fundraising and organizing free meals and winter clothes for the ones in need. Apart from these, he also works in his family business as a sales and marketing executive.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Kaniz_Fatima" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/181-(2).png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Kaniz_Fatima').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4> Kaniz Fatima</h4>
                            <small>Campaign Manager</small>
                            <p>My name is Kaniz Fatima and I work in education. Being raised in an underdeveloped country and later moving to the most developed country in the world, I believe that it is a responsibility to help those that are less fortunate.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Nazmun_Naher" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/16_content_2.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Nazmun_Naher').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4> Nazmun Naher</h4>
                            <small>Director, Operation in BD</small>
                            <p>
                                My name is Mst Nazmun Naher I am the Chairman of National AgriCare group, which based in Dhaka, Bangladesh. The group particularly deals with manufacturing pharmaceutical products, Agricultural solutions, real estate, etc. I have been also working as the Director of Finance of China Gardencity Developers limited since 2011. This is a prominent real estate company in Bangladesh. Apart from this, I have engaged in several social works in our non-profit organization, Syed Momena Momtaj Foundation. The local office is based in Bogura, Bangladesh. The mission of the foundation is to provide scholarships to unprivileged talented students in the middle, the highschool and also in the post graduate and PhD programs. I have always been passionate about helping the vulnerable community in Bangladesh. I am delighted to be a part of Hemica's Angels for Humanity.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Munzerin_Mohiuddin" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-munzerin-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Munzerin_Mohiuddin').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Munzerin Mohiuddin</h4>
                            <small>Marketing and communication coordinator</small>
                            <p>Munzerin Mohiuddin completed her graduation from BRAC University and post graduation from Dhaka University, both in ELT (English Language Teaching). She is a social and language researcher, translator and teacher at different institutions. She is actively supporting education of underprivileged children from her home district. As an educator, she believes that social services can enlighten the young generation with great works for social development. Being a volunteer, she wants to bring positive changes in the community and the young minds for human welfare.</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Tahsin_Firoza_Khan" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-tahsin-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Tahsin_Firoza_Khan').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Dr. Tahsin Firoza Khan (Amina)</h4>
                            <small>Project Coordinator</small>
                            <p>Tahsin is a registered doctor, currently working as an FCPS part II trainee in the Department of Surgery, Dhaka Medical College Hospital which is one of the oldest & most renowned hospitals in Bangladesh. She acquired her MBBS degree from Ibrahim Medical College in 2017 & completed her internship from BIRDEM General Hospital, the largest specialized hospital in the country for Diabetes. She passed MRCS Part a from Royal College of Surgeons, UK in 2020. She has always dreamed of working for suffering humanity since childhood. That’s why throughout her academic years, she has worked for different volunteer organizations which mostly aimed at providing a quality life to the underprivileged. She got entitled as “SAYS Young Fellow” for her successful completion of 100 hours "SAYS Young Fellowship Challenge 2014-15" with innovative workshops, awareness campaigns & social beneficiary activities. She worked as an official first responder of “Critical Link” too.
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="DR_ANIL_PASUPULETI" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-anil-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('DR_ANIL_PASUPULETI').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>DR. Anil Pasupuleti Md</h4>
                            <small>Program Coordinator</small>
                            <p>Dr Anil is a licensed Medical doctor from India. He earned his International Medical degree from the collage of International Clinical Medicine, Southeast University, Nanjing. It is one of the key universities in China. He is certified to the standards of American heart association. Dr Anil is also certified American Academy of Aesthetics Medicine (AAAM) Physician.

                                He practised as a General Physician and gained experience in Emergency medicine and Intensive care unit. His experience in the two largest populated countries helped him gain immense medical knowledge and well adaptive with patients from the different cultural background and good patient serving skills. Dr Anil performed several minimal invasive and non-invasive procedures uneventfully and conducted several medical camps effectively as a part of preventive and diagnostic medicine and provided cost-effective treatments.

                                His strong partnership with Plastic/Cosmetic specialists let him complete advanced training in Non-Surgical Facial Rejuvenation and Cosmetic Medical Procedures under renowned plastic surgeon Dr Brad Herman in Miami, Florida.

                                Dr Anil has global experience working onboard Major cruise lines in the world including Princess Cruise lines, Norwegian Cruise Lines and Royal Caribbean Cruises®. He helps his clients looking refresh and rejuvenated.</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="Romana_Afroz" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <img src="assets/images/team/t-romana-1.png" alt="">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Romana_Afroz').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <h4>Romana Afroze</h4>
                            <small>Campaign Coordinator</small>
                            <p>Romana Afroze is currently a Lecturer in Law at American International University -Bangladesh and a Juris Doctorate student at UB SUNY Law School. She has graduated with an LL.M. in Specialized Commercial Law and an LL.B. from University of Dhaka. She worked in Akhtar Imam and Associates (AIA) as an Intern Researcher, a law firm which is one of the best in commercial litigation based practice in Bangladesh. She has notable as well as significant achievements in mooting with specific concentration in International Law from JESSUP International and Oxford-Price Media Moots and likes to pursue for becoming an aspiring thought leader, working for mental health support programs and believes herself to be a mentor enthusiast.</p>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>



</main>



@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')

    <script>
        // Get the modal
        var Rahman_abanti_Hemic = document.getElementById('Rahman_abanti_Hemic');
        var Carole_Acunto = document.getElementById('Carole_Acunto');
        var Deborah = document.getElementById('Deborah');
        var Ashley_Hu = document.getElementById('Ashley_Hu');
        var Nusrat_Durdana = document.getElementById('Nusrat_Durdana');
        var Rafi = document.getElementById('Rafi');
        var Pushpita_Roy = document.getElementById('Pushpita_Roy');
        var Chelsee_Wilson = document.getElementById('Chelsee_Wilson');
        var Megha_singh = document.getElementById('Megha_singh');
        var Samira_Mawla = document.getElementById('Samira_Mawla');
        var Sean_McReynolds = document.getElementById('Sean_McReynolds');
        var XiwenLi = document.getElementById('XiwenLi');
        var Yalid_Bin_Rahman = document.getElementById('Yalid_Bin_Rahman');
        var Nazmun_Naher = document.getElementById('Nazmun_Naher');
        var Kaniz_Fatima = document.getElementById('Kaniz_Fatima');
        var Munzerin_Mohiuddin = document.getElementById('Munzerin_Mohiuddin');
        var Romana_Afroz = document.getElementById('Romana_Afroz');
        var span = document.getElementsByClassName("colse_div")[0];
        var btn;

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            Rahman_abanti_Hemic.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Rahman_abanti_Hemic.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Rahman_abanti_Hemic) {
                Rahman_abanti_Hemic.style.display = "none";
            }
        }
        //1st
        btn.onclick = function() {
            Carole_Acunto.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Carole_Acunto.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Carole_Acunto) {
                Carole_Acunto.style.display = "none";
            }
        }

        //2nd
        btn.onclick = function() {
            Deborah.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Deborah.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Deborah) {
                Deborah.style.display = "none";
            }
        }
        //3rd
        btn.onclick = function() {
            Ashley_Hu.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Ashley_Hu.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Ashley_Hu) {
                Ashley_Hu.style.display = "none";
            }
        }
        //4th
        btn.onclick = function() {
            Nusrat_Durdana.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Nusrat_Durdana.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Nusrat_Durdana) {
                Nusrat_Durdana.style.display = "none";
            }
        }
        //5th
        btn.onclick = function() {
            Rafi.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Rafi.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Rafi) {
                Rafi.style.display = "none";
            }
        }
        //6th
        btn.onclick = function() {
            Pushpita_Roy.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Pushpita_Roy.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Pushpita_Roy) {
                Pushpita_Roy.style.display = "none";
            }
        }
        //7th
        btn.onclick = function() {
            Chelsee_Wilson.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Chelsee_Wilson.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Chelsee_Wilson) {
                Chelsee_Wilson.style.display = "none";
            }
        }
        //8th
        btn.onclick = function() {
            Megha_singh.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Megha_singh.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Megha_singh) {
                Megha_singh.style.display = "none";
            }
        }
        //9th
        btn.onclick = function() {
            Samira_Mawla.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Samira_Mawla.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Samira_Mawla) {
                Samira_Mawla.style.display = "none";
            }
        }
        //10th
        btn.onclick = function() {
            Yalid_Bin_Rahman.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Yalid_Bin_Rahman.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Yalid_Bin_Rahman) {
                Yalid_Bin_Rahman.style.display = "none";
            }
        }
        //11th
        btn.onclick = function() {
            Nazmun_Naher.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Nazmun_Naher.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Nazmun_Naher) {
                Nazmun_Naher.style.display = "none";
            }
        }
        //12th
        btn.onclick = function() {
            XiwenLi.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            XiwenLi.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == XiwenLi) {
                XiwenLi.style.display = "none";
            }
        }
        //13th
        btn.onclick = function() {
            Kaniz_Fatima.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Kaniz_Fatima.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Kaniz_Fatima) {
                Kaniz_Fatima.style.display = "none";
            }
        }
        //14th
        btn.onclick = function() {
            Munzerin_Mohiuddin.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Munzerin_Mohiuddin.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Munzerin_Mohiuddin) {
                Munzerin_Mohiuddin.style.display = "none";
            }
        }
        //15th
        btn.onclick = function() {
            Romana_Afroz.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Romana_Afroz.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Romana_Afroz) {
                Romana_Afroz.style.display = "none";
            }
        }
        //16th
        btn.onclick = function() {
            Sean_McReynolds.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            Sean_McReynolds.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == Sean_McReynolds) {
                Sean_McReynolds.style.display = "none";
            }
        }
    </script>

@endsection