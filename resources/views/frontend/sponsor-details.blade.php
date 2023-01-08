@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")
<!-- box promo section -->
<section>
    <div class="container">

        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                        <div class="single_donate mt-5">
                            <img src="{{url(Path::sponsors() . $sponsor->image)}}" alt="Sponsor Image" style="width: 100%;" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 childInfo pt-5">
                                <h1>
                                    {{$sponsor->name}}
                                </h1>
                                @if($sponsor->ageRange == 2)
                                <p>Your monthly gift of ${{$sponsor->amount}} will give {{$sponsor->name}} access to life-changing benefits, such as {{$sponsor->name}} and <span id="genderCheck">his</span> mom will receive regular healthy meals, medical care, hygiene kits and proper education for nutritious food preparation, guidance for wellbeing and development of {{$sponsor->name}}. Your friendship, love and support will bring hope to <span id="genderCheckHimHer">him</span> that will last a lifetime. Sponsor {{$sponsor->name}} today for only ${{$sponsor->amount}} per month!</p>

                                @elseif($sponsor->ageRange == 3)
                                <p> Your sponsorship with give {{$sponsor->name}} a healthy start in life and continues to support <span id="genderCheck"></span> <span id="genderCheckHimHer">his</span> as they learn and grow. You will ensure that {{$sponsor->name}} is receiving nutritious food, clean drinking water, hygiene kits and early childhood education. Your friendship, love and support will bring hope to <span id="genderCheckHimHer">his</span> that will last a lifetime. Sponsor {{$sponsor->name}} today for only ${{$sponsor->amount}} per month! </p>

                                @else
                                <p> By sponsoring {{$sponsor->name}}, you will ensure that {{$sponsor->name}} is receiving regular nutritious food, clean drinking water, hygiene kits and basic school learning equipment, such as pens, pencils, bags, geometry sets. Your friendship, love and support will bring hope to a child that will last a lifetime. Sponsor {{$sponsor->name}} today for only ${{$sponsor->amount}} per month!</p>

                                @endif
                                <input type="hidden" id="sponsor_child_name" name="sponsor_child_name" value="{{$sponsor->name}}">
                                <input type="hidden" id="sponsor_child_gender" name="sponsor_child_gender" value="{{$sponsor->gender}}">
                                <input type="hidden" id="sponsor_child_id" name="sponsor_child_id" value="{{$sponsor->id}}">
                                <input type="hidden" id="sponsor_child_image" name="sponsor_child_image" value="{{$sponsor->image}}">

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                                <p style="    font-size: 23px;color: #03A9F4;">${{$sponsor->amount}} /month</p>
                                <div class="combo-cart-sponsorship-row__control-column">
                                    <div class="sponsorship-donation-amount-control">
                                        <div class="sponsorship-frequency-selector">
                                            <div class="sponsorship-frequency-selector__label">Sponsor For</div>
                                            <select class="sponsorship-frequency-selector__dropdown packages_duration" id="sponsorshipDropDown" onchange="change(this.value)">
                                                <option value="0" selected>--Select Months--</option>
                                                <option value="1_month,{{$sponsor->amount}}">1 Month</option>
                                                <option value="3_month,{{$sponsor->amount}}">3 Months</option>
                                                <option value="6_month,{{$sponsor->amount}}">6 Months</option>
                                                <option value="12_month,{{$sponsor->amount}}"> 12 Months</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <a href="{{ url("/cart") }}"><button class="w-full show-next-donate-screen" id="donate-button" type="submit">Sponsor Now</button></a>

                                <div id="warning" style="padding-top: 10px;">

                                </div>


                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs" role="tablist">
                                <li class="child_sponsorship_tab active" id="tab-title-child_sponsorship" role="tab" aria-controls="tab-child_sponsorship">
                                    <a href="#tab-child_sponsorship">Bio</a>
                                </li>
                            </ul>
                            <hr>
                            <span class="xs-separetor v2"></span>
                            <h1 class="product_title entry-title">Bio of {{$sponsor->name}}</h1>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--child_sponsorship panel entry-content wc-tab" id="tab-child_sponsorship" role="tabpanel" aria-labelledby="tab-title-child_sponsorship" style="display: block;">
                                <p class="child-data child-gender"><span>Amount: </span>${{$sponsor->amount}} /month</p>
                                <p class="child-data child-gender"><span>Gender: </span>{{$sponsor->gender}}</p>
                                <p class="child-data child-age"><span>Age: </span>{{$sponsor->age}}</p>

                                @if($sponsor->ageRange == 4)
                                <p class="child-data child-goesToSchool"><span> Goes to School: </span>{{$sponsor->goesToSchool}}</p>
                                <p class="child-data child-grade"><span> Grade: </span>{{$sponsor->grade}}</p>
                                <p class="child-data child-favouriteSubject"><span>Favorite subject: </span>{{$sponsor->favouriteSubject}}</p>
                                <p class="child-data child-hobbies"><span>Hobby: </span>{{$sponsor->hobbies}}</p>
                                <p class="child-data child-dreams"><span>Dream: </span>{{$sponsor->dreams}}</p>
                                @endif



                                <p class="child-data child-area"><span>Location: </span>{{$sponsor->projectArea}}</p>
                                <p class="child-data child-siblings"><span>Number of Siblings: </span>{{$sponsor->noOfSiblings}}</p>
                                <p class="child-data child-sourceOfEnergy"><span>Prime Source of energy and nutrients: </span>{{$sponsor->sourceOfEnergy}}</p>
                                <p class="child-data child-monhtlyProtein"><span>Monthly Protein intake: </span>{{$sponsor->monhtlyProtein}}</p>

                                <p class="child-data child-guardianEmployment"><span>Guardian's Employment: </span> {{$sponsor->guardianEmployment}}</p>
                                <p class="child-data child-income"><span>Household Income: </span> {{$sponsor->householdIncome}}</p>



                            </div>

                        </div>

                        <p class="first-payment-date"></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 widget-area leftContainer">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  ">
                                <h4 class="widget-title widgettitle">Want to sponsor another child?</h4>
                            </div>
                        </div>

                        @foreach ($getAllSponsor as $all)
                        @if($all->isSidebar == 1)
                        <a href={{ url("/sponsor/$all->id/details") }}>
                            <div class="row" style="border-bottom: solid 1px #80808030;box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.2);">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 14px 0px 5px 0px;">
                                    <div class="side_img">
                                        <img src="{{url(Path::sponsors() . $all->image)}}" alt="Sponsor Image" style="width: 100%;" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="img_section_side">
                                        <p class="side_p">{{$all->name}}</p>
                                        <span class="side_span">Sponsor for ${{$all->amount}}/month</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach

                        <div class="mx-auto" style="padding-top: 15px;">
                            <a href="{{ url("/sponsor") }}" class="btnShow">
                                Show All
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- .row end -->

        <!-- <div class="mbl-sideshow mb-5">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 mt-5 widget-area1" style="background-color: #00baa3;padding: 25px;border-radius: 5px;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  ">
                            <h4 class="widget-title widgettitle">Sponsor a Child</h4>
                        </div>
                    </div>
                    @foreach ($getAllSponsor as $all)
                    <a href="">
                        <div class="row mb-5">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="side_img">
                                    <img src="{{url(Path::sponsors() . $all->image)}}" alt="Sponsor Image" style="width: 100%;" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="text-center img_section_side">
                                    <p class="side_p">{{$all->name}}</p>
                                    <span class="side_span">sponsor for just {{$all->amount}}/month</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    @endforeach

                </div>
            </div>
        </div> -->
    </div>
</section>

@include ('layouts.frontend.footer')


@endsection