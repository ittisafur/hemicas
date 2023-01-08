<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .invoice-box {
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
            background: white;
            margin-bottom: 20px;
        }

        body.body_color {
            background: #EDEEF2;
        }

        hr.hr_invoice {
            border-bottom: 2px solid #505050;

        }

        h3.h3_color {
            color: #17a2b8;
        }
    </style>
</head>

<body class="body_color">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-1 col-10">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-box">
                            <div class="col-12">
                                <div class="text-center m-4"><img src="{{$logoSmall}}" alt="">
                                </div>
                            </div>
                            <h5>Invoice</h5>
                            <p> Your Donor Id :<span>{{$providerId}}</span></p>
                            <p> Billing Date :<span>{{$date}}</span></p>
                            <hr class="hr_invoice">
                            <h3 class="h3_color">Sponsor</h3>
                            <p>The credit card ending in {{$last4}} has being successfully donated USD {{$amount}}.</p> <!--  A copy of this receipt is also in your <a href="#">billing statement </a> -->
                            <p>If you have any questions, please let us know. We'll get back to you as soon as we can.</p>
                            <p>Sincerely yours,</p>
                            <p>Hemica's Angels for Humanity Team</p>
                            <!--<hr class="hr_invoice">
                             <div class="row">
                                <div class="col-8">
                                    <p>For the upcoming year, beginning August XX, XXX</p>
                                    <p>40 Plan (annual) - $XXX.XX</p>
                                    <p>20% annual discount (annual) - $XX.XX</p>
                                </div>
                                <div class="col-4">
                                    <p class="float-right">$XX</p>
                                </div>
                            </div> -->
                            <!-- <hr class="hr_invoice">
                            <div class="row">
                                <div class="col-8">
                                    <p>Total</p>

                                </div>
                                <div class="col-4">
                                    <p class="float-right">USD {{$amount}}</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>