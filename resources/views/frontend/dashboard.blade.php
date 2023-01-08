@extends("layouts.frontend.index")


@section("meta")
@include ('layouts.frontend.meta')
<link rel="stylesheet" href="/assets/css/dashboard.css">
<!-- <link rel="stylesheet" href="/assets/css/all.css"> -->
<!-- <link rel="stylesheet" href="/assets/css/fontawesome.min.css"> -->
@endsection

@section("header")
@include ('layouts.frontend.header')
@endsection

@section("content")



<main class="xs-main">
    <!-- box promo section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav  xs-nav-pills" id="v-pills-tab">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="pill" href="#My_account">My account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Donation">Donation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Sponsorships">Sponsorships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Zakat">Zakat</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Gifts">Gifts</a>
                        </li> -->

                    </ul>
                </div>
                <div class="col-lg-12">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane slideUp active show" id="My_account" role="tabpanel">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="modal-content2 animate">

                                        <div class="section__container block">
                                            <div class="row">
                                                <div class="col-xl-7 col-sm-12">
                                                    <h2 class="block__header">My account</h2>
                                                </div>
                                                <div class="col-xl-5 col-sm-12 block__edit">
                                                    <a class="button button--edit" onclick="editAccounts('{{$users}}')" style="cursor: pointer;">
                                                        Manage My Account
                                                    </a>
                                                    <a class="button button--edit" onclick="changePasswordModalLunch('{{$users}}')" style="cursor: pointer;">
                                                        Change Password
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-xl-7 col-md-12 ">
                                                    <hr class="block__hr hr--black">
                                                    <div class="">

                                                        <dl>
                                                            <dt class="block__field__heading">DONOR ID : <span>{{$users->provider_id}}</span></dt>
                                                        </dl>
                                                        <dl>
                                                            <dt class="block__field__heading">Email Address : <span>{{$users->email}}</span></dt>
                                                        </dl>
                                                        <!-- <dl>
                                                            <dt class="block__field__heading">Username : <span>sanjida.santa@gmail.com</span></dt>
                                                        </dl> -->


                                                    </div>

                                                </div>
                                                <div class="col-xl-5 col-md-12">
                                                    <hr class="block__hr hr--black hidden--under-tablet-wide">
                                                    <dl>

                                                        <dt class="block__field__heading">Name : <span>{{$users->name}}</span></dt>
                                                    </dl>
                                                    <dl>

                                                        <dt class="block__field__heading">Address : <span>{{$users->billingAddress}}</span></dt>
                                                    </dl>
                                                    <dl>
                                                        <dt class="block__field__heading">Password : <span>********</span></dt>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- #My_account END -->
                        <div class="tab-pane slideUp" id="Donation" role="tabpanel">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="modal-content2 animate">

                                        <div class="section__container block">
                                            <div class="row">
                                                <div class="col-xl-7 col-sm-12">
                                                    <h2 class="block__header">My Donation</h2>
                                                </div>
                                                <div class="col-xl-5 col-sm-12 block__edit">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black">
                                                    <div id="recent-giving-history" class="recent-giving-history block__wrapper">
                                                        <h3 class="block__edit__header">Recent Donation history</h3>

                                                        @if(count($donates) == 0)
                                                        <p>You do not have any recent Donation history.</p>
                                                        @endif


                                                    </div>

                                                </div>

                                                @if(count($donates) > 0)
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black hidden--under-tablet-wide">

                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body form">
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column table-responsive" id="user">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-money-check pr-2"></i>Amount
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-coins pr-2"></i>Currency
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-money-check-alt pr-2"></i>Type
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-calendar-alt pr-2"></i>Donation Date
                                                                        </th>
                                                                        <!-- <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-pencil-ruler pr-2"></i>Action
                                                                        </th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($donates as $donate)
                                                                    <tr id="{{$donate->id}}">
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$donate->amount}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$donate->currency}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$donate->type}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$donate->created_at->format('Y-m-d')}}
                                                                        </td>
                                                                        <!-- <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            <a href="#" class="button reactivate">Reactivate</a>
                                                                            <a href="#" class="button cancel">Cancel</a>
                                                                        </td> -->
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- #Donation END -->
                        <div class="tab-pane slideUp" id="Sponsorships" role="tabpanel">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="modal-content2 animate">

                                        <div class="section__container block">
                                            <div class="row">
                                                <div class="col-xl-7 col-sm-12">
                                                    <h2 class="block__header">Sponsorships</h2>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black">
                                                    <div class="recent-giving-history block__wrapper">
                                                        <h3 class="block__edit__header">Recent Sponsorships history</h3>
                                                    </div>

                                                </div>

                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black hidden--under-tablet-wide">
                                                    <input type="hidden" value="{{$sponsorDonates}}" id="sponsorDonates_data">
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body form">
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column table-responsive" id="user">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th><span class="nobr">SponsorId</span></th>
                                                                        <th><span class="nobr"><i class="fas fa-calendar-alt pr-2"></i>Sponsor Date</span></th>
                                                                        <th><span class="nobr"><i class="fas fa-money-check-alt pr-2"></i>Type</span></th>
                                                                        <th><span class="nobr"><i class="fas fa-money-check pr-2"></i>Total</span></th>
                                                                        <th><span class="nobr"><i class="fas fa-pencil-ruler pr-2"></i>Details</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($sponsorDonates as $sponsorDonate)
                                                                    <?php
                                                                    $newTZ = new DateTimeZone("America/New_York");
                                                                    $date = new DateTime($sponsorDonate->created_at);
                                                                    $date->setTimezone($newTZ);

                                                                    ?>
                                                                    <tr id="{{$sponsorDonate->id}}">
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$sponsorDonate->id}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$date->format('Y-m-d H:i:s')}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$sponsorDonate->type}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            $ {{$sponsorDonate->amount}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            <a href="#" class="button reactivate" onclick="getDetails('{{$sponsorDonate->sponsor_details}}')">View</a>

                                                                        </td>
                                                                    </tr>

                                                                    @endforeach
                                                                    <tr>
                                                                        <td colspan="3" style="text-align: right;">Grand Total</td>
                                                                        <td style="text-align:center;font-weight:bold" id="calGrandTotal">

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- #Sponsorships END -->

                        <div class="tab-pane slideUp" id="Zakat" role="tabpanel">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="modal-content2 animate">

                                        <div class="section__container block">
                                            <div class="row">
                                                <div class="col-xl-7 col-sm-12">
                                                    <h2 class="block__header">My Zakat</h2>
                                                </div>
                                                <div class="col-xl-5 col-sm-12 block__edit">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black">
                                                    <div id="recent-giving-history" class="recent-giving-history block__wrapper">
                                                        <h3 class="block__edit__header">Recent Zakat history</h3>

                                                        @if(count($zakats) == 0)
                                                        <p>You do not have any recent Zakat history.</p>
                                                        @endif


                                                    </div>

                                                </div>

                                                @if(count($zakats) > 0)
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black hidden--under-tablet-wide">
                                                    <input type="hidden" value="{{$zakats}}" id="zakats_data">
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body form">
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column table-responsive" id="zakat">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-money-check pr-2"></i>Type
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-coins pr-2"></i>Currency
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-money-check-alt pr-2"></i>Amount
                                                                        </th>
                                                                        <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-calendar-alt pr-2"></i>Zakat Date
                                                                        </th>
                                                                        <!-- <th class="hidden-xs" style="text-align: center;">
                                                                            <i class="fas fa-pencil-ruler pr-2"></i>Action
                                                                        </th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($zakats as $zakat)
                                                                    <tr>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$zakat->type}}
                                                                        </td>

                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$zakat->currency}}
                                                                        </td>

                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$zakat->amount}}
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            {{$zakat->created_at->format('Y-m-d')}}
                                                                        </td>
                                                                        <!-- <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            <a href="#" class="button reactivate">Reactivate</a>
                                                                            <a href="#" class="button cancel">Cancel</a>
                                                                        </td> -->
                                                                    </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <td colspan="2" style="text-align: right;">Grand Total</td>
                                                                        <td style="text-align:center;font-weight:bold" id="calGrandZakatTotal">

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="tab-pane slideUp" id="Gifts" role="tabpanel">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="modal-content2 animate">

                                        <div class="section__container block">
                                            <div class="row">
                                                <div class="col-xl-7 col-sm-12">
                                                    <h2 class="block__header">Gifts</h2>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black">
                                                    <div class="recent-giving-history block__wrapper">
                                                        <h3 class="block__edit__header">Recent Gifts history</h3>
                                                    </div>

                                                </div>

                                                <div class="col-xl-12 col-md-12">
                                                    <hr class="block__hr hr--black hidden--under-tablet-wide">

                                                    <div class="portlet light bordered">
                                                        <div class="portlet-body form">
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="user">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th><span class="nobr">Donation</span></th>
                                                                        <th><span class="nobr">Date</span></th>
                                                                        <th><span class="nobr">Status</span></th>
                                                                        <th><span class="nobr">Total</span></th>
                                                                        <th><span class="nobr">Details</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            #40117
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            March 18, 2020
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            Completed
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            $180 for 1 item
                                                                        </td>
                                                                        <td class="hidden-xs" style="text-align: center;">
                                                                            <div class="success"></div>
                                                                            <a href="#" class="button reactivate" onclick="document.getElementById('Gifts_view').style.display = 'block'">View</a>

                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section>
    <!-- End box promo section -->

    <div id="Gifts_view" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <div class="colse_div">
                            <span onclick="document.getElementById('Gifts_view').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <div class="col-xl-12 col-md-12">

                                <div class="portlet light bordered">
                                    <div class="portlet-body form">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column table-responsive" id="user">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="">&nbsp;</th>
                                                    <th scope="col">Sponsor To</th>
                                                    <th scope="col">Amount Per Month</th>
                                                    <th scope="col">Sponsor For</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dashBoar_cart_details">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>

    </div>

    <div id="my_accounts" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <div class="colse_div">
                            <span onclick="document.getElementById('my_accounts').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <div class="col-xl-12 col-md-12">
                                <h4 style="padding-bottom: 40px;font-size: 18px;">Update Your Profile Information</h4>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Name</label>
                                        <input type="text" class="form-control" id="account_name" placeholder="Name" required="true">
                                        <input type="hidden" class="form-control" id="account_id">
                                        <p id="validation_name"></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="account_email" placeholder="Email" disabled="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Billing Address</label>
                                    <input type="text" class="form-control" id="account_address" placeholder="1234 Main St" required="true">
                                    <p id="validation_address"></p>
                                </div>

                                <button type="submit" class="btn btn-primary" onclick="postUserAccountsData()">Update</button>
                                <div class="alert-holder-user"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
    <div id="change__password" class="modal">
        <div class="container ">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="xs-single-causes1">
                        <div class="colse_div">
                            <span onclick="document.getElementById('change__password').style.display = 'none'" class=" close2 colse_div" title="Close Modal">&times;</span>
                        </div>
                        <div class="xs-causes-footer">
                            <div class="col-xl-12 col-md-12">
                                <h4 style="padding-bottom: 40px;font-size: 18px;">Update Your Password</h4>

                                <div class="form-group">
                                    <label for="inputAddress">Old Password</label>
                                    <input type="password" class="form-control" id="account_old__password" placeholder="Old Password" required="true">
                                    <p id="validation__old__password" style="color: #dc3545;"></p>
                                    <input type="hidden" class="form-control" id="account_id">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Password</label>
                                        <input type="password" class="form-control" id="account_password" placeholder="password" required="true">
                                        <p id="validation_password" style="color: #dc3545;"></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Re-Password</label>
                                        <input type="password" class="form-control" id="account_re_password" placeholder="password" required="true">
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary" onclick="changePassword()">Update</button>
                                <div class="alert-holder-user"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Modal -->

            </div>
        </div>

    </div>
</main>

<script>
    sessionStorage.clear();
</script>
<script>
    // Get the modal
    var Gifts_view = document.getElementById('Gifts_view');
    var span = document.getElementsByClassName("colse_div")[0];
    var btn;

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        Gifts_view.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        Gifts_view.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == Gifts_view) {
            Gifts_view.style.display = "none";
        }
    }
</script>

@include ('layouts.frontend.footer')


@endsection