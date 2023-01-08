@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")

<main>
    <!-- causes section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="checkout__heading text--plum">Summary</h6>
                            <input type="hidden" id="isLoggedIn" name="isLoggedIn" value="{{Session::get('isLoggedIn')}}">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mbl_ver">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th class="">&nbsp;</th>
                                        <th class="">&nbsp;</th>
                                        <th scope="col">Sponsor To</th>
                                        <th scope="col">Amount Per Month</th>
                                        <th scope="col">Sponsor For</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="sponsor_cart">

                                </tbody>
                            </table>
                        </div>


                        <div class="offset-xl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="combo-cart-total">
                                <div class="combo-cart-total__row">
                                    <div class="combo-cart-total__title">Total</div>
                                    <div class="combo-cart-total__qty"></div>
                                    <div class="combo-cart-total__amount ">$<span class="price_sum_tot" id="grand_total">Amount</span></div>
                                </div>
                            </div>
                            <!-- <div id="checkLoggedIn">

                            </div> -->
                            <form class="form-horizontal" enctype='multipart/form-data' id="sponsorDonate">
                                {{ csrf_field() }}
                                <button class="w-full show-next-donate-screen" id="donate-button" type="submit">Sponsor Now</button>
                            </form>
                            <div class="alert-holder-donate"></div>
                        </div>




                    </div>



                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 widget-area leftContainer">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  ">
                                    <h4 class="widget-title widgettitle">Want to sponsor another child?</h4>
                                </div>
                            </div>

                            @foreach ($sponsor as $all)
                            @if($all->isSidebar == 1)
                            <a href={{ url("/sponsor/$all->id/details") }}>
                                <div class="row" style="border-bottom: solid 1px #80808030;">
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
        </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- End causes section -->

</main>



@include ('layouts.frontend.footer')


@endsection

@section('onpagejs')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    function donateMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-donate"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    const stripe = Stripe("{{ config('services.stripe.publishable_key') }}", {
        locale: 'en'
    });

    $('#sponsorDonate').on('submit', function(e) {
        e.preventDefault();


        var amount = shoppingCart.totalCart();
        var sponsorDetails = shoppingCart.listCart();
        //return false;

        if (amount === 0) {
            donateMessageBox("Please select sponsor", "warning");
            return false;
        } else {
            $(".alert-holder-donate").html('');
        }

        var that = this;
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                )
            }
        });
        var request = $.ajax({
            url: "{{url('processSponsorCheckout')}}",
            method: "POST",
            data: {
                amount: amount,
                type: "sponsorChild",
                sponsorDetails
            }
        });
        request.done(function(data) {
            window.location.href = '/sponsorCheckout?data=' + data

        });
        request.fail(function(data) {
            donateMessageBox("Donation failed!", "warning");
        });


    });
</script>

@endsection