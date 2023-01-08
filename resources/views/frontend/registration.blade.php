@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection
@section("onpagecss")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/css/intlTelInput.css">
<style>
    .intl-tel-input {
    position: relative;
    display: inline-block;
    width: 100%;
}
</style>
@endsection
@section("content")
<main class="xs-main">
    <!-- box promo section -->
    <section class="xs-banner-inner-section1 parallax-window" style="background-image:url('assets/images/backgrounds/sponsor-page-2.jpg')">
        <div class="xs-black-overlay"></div>
        <div>
            <div class="container ">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="modal-content login_reg animate">

                            <div class="imgcontainer">
                                <div class="row nav nav-pills nav-fill mb-1">
                                    <div class="col-12">
                                        <ul class="nav nav-pills mb-3 customerul" id="pills-tab" role="tablist">
                                            <li class="nav-item customersli">
                                                <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In </a>
                                            </li>
                                            <li class="nav-item customersli">
                                                <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a>
                                            </li>
                                        </ul>
                                    </div>


                                </div>

                            </div>


                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                                    <div class="container p-5">
                                        <h2 class="media_text">Log In To Your Account:</h2>
                                        <p class="login_p">Enter your email address and password to log in to your account.</p>
                                        <h2 class="media_text">WITH YOUR SOCIAL MEDIA</h2>
                                        <hr class="single_contact_hr">
                                        <div class="row mt-5 mb-5">
                                            <div class="col-4">
                                                <div class="media_link_section_google"><i class="fa fa-google-plus"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <!-- <a href="{{ url('/login/facebook') }}"> -->
                                                <div class="media_link_section_fb"><i class="fa fa-facebook-f"></i></div>
                                                <!-- </a> -->
                                            </div>
                                            <div class="col-4">
                                                <div class="media_link_section_twitter"><i class="fa fa-instagram"></i></div>
                                            </div>
                                        </div>
                                        <h2 class="media_text"><span class="mr-2">-</span>Login Information<span>-</span></h2>
                                        <form action="{{ url('/signup/web')}}" method="post" id="register-form" class="xs-register-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="email" name="userEmail" class="username form-control" placeholder="Email" required>
                                            <input type="password" name="userPassword" class="password form-control" placeholder="password" required>
                                            <button class="login_button" id="login" type="submit">Login</button>
                                            <label class="rememberme">
                                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                            </label>
                                            <!-- <a href="#"><span class="psw">Forgot password?</span></a> -->
                                        </form>
                                    </div>
                                </div>


                                <div class="tab-pane fade pills-signup" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                                    <div class="container p-5">
                                        <h2 class="media_text">WITH YOUR SOCIAL MEDIA</h2>
                                        <hr class="single_contact_hr">
                                        <div class="row mt-5 mb-5">
                                            <div class="col-4">
                                                <div class="media_link_section_google"><i class="fa fa-google-plus"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <!-- <a href="{{ url('/login/facebook') }}"> -->
                                                <div class="media_link_section_fb"><i class="fa fa-facebook-f"></i></div>
                                                <!-- </a> -->
                                            </div>
                                            <div class="col-4">
                                                <div class="media_link_section_twitter"><i class="fa fa-instagram"></i></div>
                                            </div>
                                        </div>
                                        <h2 class="media_text"><span class="mr-2">-</span>Register<span>-</span></h2>
                                        <form action="{{ url('/signup/web')}}" method="post" id="register-form" class="xs-register-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="text" name="fName" class="username form-control" placeholder="First Name" required>
                                            <input type="text" name="lName" class="username form-control" placeholder="Last Name" required>
                                            <input type="text" name="billingAddress" class="username form-control" placeholder="Billing Address" required>
                                            <input type="tel" name="phoneNumber" id="RS-phoneNumber" class="username form-control" placeholder=" Phone Number" >
                                            <input placeholder="City" class="username form-control" aria-required="true" size="30" type="text" name="City" id="City">        
                                            
                                            <div class="field field--optional field--half">
                                                <input placeholder="ZIP" class="username form-control"" size="30"  type="number" id="checkout_billing_address_zip">
                                            </div>
                                            <!--<div class="field field--required field--half">-->
                                                

                                            <!--</div>-->
                                            <div class="field field--required field--half">
                                                 <input placeholder="State" class="username form-control" aria-required="true" size="30" type="text" name="State" id="State">

                                            </div>
                                            <div class="field field--required field--half">
                                                <!--<input placeholder="Phone Number" class="username form-control" aria-required="true" size="30" type="tel" id="phone" name="phone"  required>-->
                                                
                                            </div>
                                            
                                            <!-- <input type="text" name="postalCode" class="username form-control" placeholder="Postal Code" required> -->
                                            <input type="email" name="email" class="username form-control" placeholder="Email Address" required>
                                            <input type="password" name="password" id="password" type="password" onkeyup='check();' class="password form-control" placeholder="Password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');
                                                                    if (this.checkValidity())
                                                                        form.password_two.pattern = this.value;" required>
                                            <input type="password" name="confirm_password" id="confirm_password" onkeyup='check();' class="password form-control" placeholder="Confirm  password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');
                                            if (this.checkValidity())
                                                form.password_two.pattern = this.value;" required><span id='message'></span>

                                            <script>
                                                var check = function() {
                                                    if (document.getElementById('password').value ===
                                                        document.getElementById('confirm_password').value) {
                                                        document.getElementById('confirm_password').style.color = 'green';
                                                        // document.getElementById('message').innerHTML = 'matching';
                                                    } else {
                                                        document.getElementById('confirm_password').style.color = 'red';
                                                        // document.getElementById('message').innerHTML = 'not matching';
                                                    }
                                                }
                                            </script>
                                            <!-- <input type="password" name="password" class="password form-control" placeholder="Password" pattern="^\S{6,}$" required>
                                            <input type="password" name="cpassword" class="password form-control" placeholder="Confirm  password" pattern="^\S{6,}$"> -->
                                            <label class="rememberme">
                                                <input type="checkbox" checked="checked" name="remember"> I wish to receive newsletters, promotions and news from Hemicas Angels
                                            </label>
                                            <button class="login_button" id="signup" type="submit">Create Account</button>
                                            <!-- <h2 class="media_text">Already have account? <span><a class="linksingup" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" aria-controls="pills-signup" aria-selected="true">Sign in</a></span></h2>-->
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post" id="forgotpassForm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Forgot Password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                                        <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- End box promo section -->



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
            document.getElementById("register-form").reset();
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.0/js/intlTelInput.js"></script>

<script>
    $(function() {
        $("#RS-phoneNumber").intlTelInput({

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