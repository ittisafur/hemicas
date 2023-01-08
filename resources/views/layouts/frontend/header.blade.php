<!-- <div id="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div> -->
<!-- #preloader -->


<!-- header section -->
<div class="xs-top-bar top-bar-second webend">

    <div class="container nav-menus-wrapper clearfix">
        <!-- @if (session('status'))
        <div class="pull-right">
            <div class="alert alert-success" id="successMsg">
                {{ session('status') }}
            </div>
        </div>

        @endif -->
        <nav class="xs-menus">
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a href="{{ url('/')}}" class="xs-nav-logo md">
                    <img src="/assets/images/logo-final-3.png" alt="">
                </a>
            </div>
            <div class="nav-menus-wrapper">

                <ul class="xs-top-social nav-menu">
                    @if(Session::get('user'))
                    <li><a href="{{ url('/dashboard')}}">{{Session::get('user')->name}}</a>
                        <ul class="nav-dropdown">
                            <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                            <!-- <li><a href="#">logout</a></li> -->
                        </ul>
                    </li>
                    @endif
                    <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                    <li>
                        <a href="#"> <i class="fa fa-instagram"></i></a>
                    </li> -->


                    @if(!Session::get('user'))

                    <li><a href="{{ url('registration')}}" style="width:auto;">Sign In</a></li>
                    @endif

                    @if(Session::get('user'))
                    <li>
                        <a href="{{ url('/logout') }}"> <i class="fa fa-sign-out"></i></a>
                    </li>
                    @endif
                    <li>

                        <a href="{{ url('/cart') }}"> <i class="fa fa-heart" style="color:#e7d188"></i> <span id="ItemCounter"> </span></a>
                    </li>

                </ul>

            </div>

        </nav>
        <a href="mailto:info@hemicasangels.org" class="xs-top-bar-mail mt-2"><i class="fa fa-envelope-o"></i>info@hemicasangels.org</a>
    </div>
</div>
<div class="xs-top-bar top-bar-second mblend">
    <div class="container clearfix">
        <ul class="xs-top-social">
            <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li>
                    <a href="#"> <i class="fa fa-instagram"></i></a>
                </li> -->
            <!-- @if (session('status'))
            <li>
                <div class="alert alert-success" id="successMsgMb">
                    {{ session('status') }}
                </div>
            </li>
            @endif -->

            @if(Session::get('user'))
            <li>
                <p class="color-white">{{Session::get('user')->name}}</p>
            </li>
            @else
            <li><a href="{{ url('registration')}}" style="width:auto;">Sign In</a></li>
            @endif

            @if(Session::get('user'))
            <li>
                <a href="{{ url('/logout') }}"> <i class="fa fa-sign-out"></i></a>
            </li>
            @endif
            <!-- <li>
                <a href="#"> <i class="fa fa-shopping-cart"></i></a>
            </li> -->
            <li>

                <a href="{{ url('/cart') }}"> <i class="fa fa-heart" style="color:#e7d188"></i> <span id="ItemCounterMobile"> </span></a>
            </li>
        </ul>
        <a href="mailto:info@hemicasangels.org" class="xs-top-bar-mail mt-2"><i class="fa fa-envelope-o"></i>info@hemicasangels.org</a>



    </div>
</div>
@if (session('message'))
<div class="d-flex justify-content-center">
    <div class="alert alert-{{session('message')['type']}}" id="successMsg" style="padding: 5px;">
        <p>{{session('message')['text']}}</p>
    </div>
</div>


@endif
<header class="xs-header xs-fullWidth">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="offset-xl-1 col-xl-10 col-lg-12">
                <nav class="xs-menus">
                    <div class="nav-header">
                        <div class="nav-toggle"></div>
                        <a href="{{ url('/')}}" class="xs-nav-logo">
                            <img src="/assets/images/logo-final-14.png" alt="">
                        </a>
                    </div>
                    <!-- .nav-header END -->
                    <div class="nav-menus-wrapper row">
                        <div class="xs-logo-wraper col-lg-2">
                            <a class="nav-brand" href="{{ url('/')}}">
                                <img src="/assets/images/logo-final-14.png" alt="">
                            </a>
                        </div>
                        <!-- .xs-logo-wraper END -->
                        <div class="col-lg-8">
                            <ul class="nav-menu">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="#">who we are</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="{{ url('team')}}">Our team </a></li>
                                        <li><a href="{{ url('mission')}}">Our mission </a></li>
                                        <li><a href="{{ url('vision')}}">Our vision</a></li>
                                        <!-- <li><a href="#">Our Partners</a></li> -->
                                        <li><a href="{{ url('faq')}}">FAQ</a></li>


                                    </ul>
                                </li>
                                <li><a href="#">what we do</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="{{ url('work')}}">where we work</a></li>
                                        <li><a href="{{ url('program')}}">Our programs</a></li>
                                        <!--<li><a href="#">progress</a></li> -->
                                        <li><a href="{{ url('success')}}">Success stories</a></li>
                                        <li><a href="{{ url('research')}}">Research & Reports</a></li>
                                        <!-- <li><a href="#">upcoming events</a></li> -->

                                    </ul>
                                </li>
                                <li><a href="#">get involved</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="{{ url('donate')}}">Donate</a></li>
                                        <li><a href="{{ url('sponsor')}}">Sponsor a child</a></li>
                                        <li><a href="{{ url('cloth')}}">Donate your used items</a></li>
                                        <li><a href="{{ url('zakat')}}">Give Zakat</a></li>
                                        <li><a href="{{ url('volunteer-create')}}"> Volunteer</a></li>
                                        <li><a href="{{ url('idea')}}">Share your ideas</a></li>
                                        <!-- <li><a href="{{ url('gift')}}">Send gifts</a></li> -->

                                    </ul>
                                </li>
                                <li><a href="https://event.hemicasangels.org/" target="_blank">Our Handwoven Home Decor</a></li>
                                <li><a href="{{ url('contact')}}">Contact Us</a></li>
                                @if(Session::get('user'))
                                <li class="mb-useronly"><a href="#">{{Session::get('user')->name}}</a>
                                    <ul class="nav-dropdown " style="right: auto!important;top: 45px;">
                                        <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{ url('/logout') }}">logout</a></li>
                                    </ul>
                                </li>
                                @endif


                            </ul>
                            <!-- .nav-menu END -->
                        </div>

                        <div class="xs-navs-button d-flex-center-end col-lg-2">
                            <a href="{{ url('donate')}}" class="btn btn-primary">
                                <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                            </a>
                        </div>
                        <!-- .xs-navs-button END -->
                    </div>
                    <!-- .nav-menus-wrapper .row END -->
                </nav>
                <!-- .xs-menus .fundpress-menu END -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</header>