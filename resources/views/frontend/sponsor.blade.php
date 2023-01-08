@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("onpagecss")
<link rel="stylesheet" href="/assets/css/sponsor.css">
@endsection

@section("content")

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/donate-page-5.jpg')">
    <div class="xs-black-overlay"></div>
    <div class="container">
        <div class="color-white xs-inner-banner-content">
            <h2>SPONSOR A CHILD </h2>
            <p>'' You can help end hunger for a child and their family by sponsoring today ''</p>
            <!--<ul class="xs-breadcumb">-->
            <!--    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Donate</li>-->
            <!--</ul>-->
        </div>
    </div>
</section>
<!--breadcumb end here-->
<!-- End welcome section -->


<main class="xs-main">

    <!-- box promo section -->
    <section class="xs-children-section xs-section-padding">
        <div class="container">
            <div class=" row xs-mb-60">
                <div class="col-md-12 mx-auto text-center">
                    <p class="text-justify">We are offering you an opportunity to show God's love to a child in need in a personal way. You can change a Child's Future by sponsoring them for $20 per month. Because, in times of crisis, children in poverty are especially vulnerable and face uncertain futures. Your monthly gift will help a child living with parents who cannot adequately provide for them. For $20 a month, you'll help that child and the family by ensuring nutrition and basic necessities. Your donation will go into our sponsorship fund and your child will receive the benefits of their program through your contributions and others</p>
                    <h2 class="xs-title">What you get when you sponsor a child ?</h2>
                    <!-- <p>Sponsor a Child in Bangladesh with Hemica's Angels. Sponsoring a child is a personal way to show God's love to a child in need.
                        For $20 a month, you'll help that child and the family by ensuring nutrition and basic necessities.</p> -->
                    <span class="xs-separetor dashed"></span>
                    <ul class="pro_ul">
                        <li class="color-burntOrange">Welcome packet with child's information</li>
                        <li class="color-burntOrange">Your first letter from your child's or his/her the mother (within 1 Month)</li>
                        <li class="color-burntOrange">Your child's photo and monthly updates</li>
                        <li class="color-burntOrange">Annual progress reports from your child’s school</li>
                        <li class="color-burntOrange">opportunity to make video calls with your child</li>
                        <li class="color-burntOrange">An online Angel Donor account where you can send email your child, send extra gifts, and see the latest photos, videos of your child </li>
                        <li class="color-burntOrange">The life-changing opportunity to visit your sponsored child (Applicable for 10 or more annual sponsorship's.)</li>
                       

                    </ul>


                </div>
            </div>
            <div class="xs-heading row ">
                <div class="col-md-11 mx-auto text-center">
                    <!-- <p>Sponsor a Child in Bangladesh with Hemica's Angels. You can give a vulnerable child living in severe poverty in Bangladesh the opportunity to become an independent and productive citizen. Your sponsorship will help ensure that
                        this child is able to go to school instead of joining the labor force and provide basic necessities, school supplies, nutritious food, health care, and family support.</p>
                   
                    <p>We believe that child sponsorship has the power to drive change that ripples throughout children's lives, their families and entire communities. Below, meet some of the boys and girls who are waiting to be sponsored by someone
                        like you.</p> -->

                </div>
            </div>
            <!-- .row end -->
            @if($sponsors)
            <div class="row paginationcont ">
                @foreach ($sponsors as $sponsor)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-5 single-item">
                    <a href={{ url("sponsor/$sponsor->id/details") }}>
                        <div class="xs-single-children">
                            <img src="{{url(Path::sponsors() . $sponsor->image)}}" alt="Sponsor Image" style="height: 300px;">
                            <div class="xs-children-details">
                                <h4>Name: {{$sponsor->name}}</h4>
                                <h4>Age : {{$sponsor->age}}</h4>
                                <h4>${{$sponsor->amount}} /month</h4>
                                <div class="btn btn-primary">
                                    <span class="badge"><i class="fa fa-heart"></i></span> 
                                    @if($sponsor->name == 'Ritu' || $sponsor->name == 'Ruhi') 
                                        Renew Now
                                    @else
                                        Sponsor Now
                                    @endif    
                                </div>
                            </div>
                            <!-- .xs-children-details END -->

                        </div>
                    </a>
                    <!-- .xs-single-children END -->
                </div>
                @endforeach
            </div>
            @endif

            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End box promo section -->


</main>



@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')
<script src="/assets/js/sponsor.js"></script>
@endsection