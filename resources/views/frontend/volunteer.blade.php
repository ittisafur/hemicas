<!-- become a volunteer section -->
<section class="parallax-window xs-become-a-volunteer xs-section-padding" style="background-image: url('assets/images/backgrounds/volunteer-bg.jpg')">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-7">

                <div class="xs-volunteer-form-wraper volunteer-version-3">
                    <div class="alert-holder-volunteer"></div>
                    <i class="icon-support icon-watermark"></i>
                    <h2>Become a Volunteer</h2>
                    <p>We wholeheartedly appreciate your love and dedication towards
                            helping others. Thank you for your interest in volunteering and
                            supporting our organization's cause.</p>
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
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- End become a volunteer section -->