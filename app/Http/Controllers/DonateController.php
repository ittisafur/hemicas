<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;
use App\Models\Donate;
use Session;
use Illuminate\Support\Facades\Mail;
use PDF;
use Alert;
use App\Models\Sponsor_donate;
use App\Models\Sponsor;

class DonateController extends Controller
{



    public function initial()
    {
        // $stripe = new \Stripe\StripeClient(
        //     config('services.stripe.secret_key')
        // );
        // $response = $stripe->checkout->sessions->retrieve(
        //     'cs_test_a18Cyvde9vgOYfxHduiYYsk6pzeLYI0aGXfC3bqnwlVZgOMxz22rM4wIMo',
        //     []
        // );

        // dd($response);


        if (Session::get('user')) {

            return view('frontend.donate');
        } else {
            return redirect()->route('landing');
        }
    }

    public function donate()
    {
        $causes = Cause::all();
        $sponsors =  Sponsor::latest()->where(['status' => 'active'])->take(8)->get();

        return view('frontend.initial', compact('causes', 'sponsors'));
    }


    public function processCheckout(Request $request)
    {
        if (Session::has('user')) {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret_key'));

        $amount = $request->amount;
        $amount *= 100;
        $amount = (int) $amount;

            if ($request->type === "monthly" && Session::has('user')) {

                $stripe = new \Stripe\StripeClient(
                    config('services.stripe.secret_key')
                );
                $session = $stripe->checkout->sessions->create([
                    'success_url' => url('/dashboard'),
                    'cancel_url' => url('/donate'),
                    'payment_method_types' => ['card'],
                    'line_items' => [
                        [
                            'price' => $request->price,
                            'quantity' => 1,
                        ],
                    ],
                    'mode' => 'subscription',
                    'customer_email' => Session::get('user')->email
                ]);

                //dd($session);
                $id = $session->id;
                return $id;
            } else {


                $payment_intent = \Stripe\PaymentIntent::create([
                    'description' => 'Payment From Hemicas Angels',
                    'amount' => $amount,
                    'currency' => 'USD',
                    'payment_method_types' => ['card'],
                ]);
                $intent = $payment_intent->client_secret;
                session(['payment_details' => (int) $amount / 100]);
                return $intent;
            }
        }
        else{
            return false; 
        }
    }

    public function checkout(Request $request)
    {
        //dd($request->query('data'));
        if (Session::get('user') && $request->query('data')) {
            $intent = $request->query('data');
            return view('frontend.checkout', compact('intent'));
        } else {
            return redirect()->route('landing');
        }
    }



    public function store(Request $request)
    {

        $donate = new Donate;
        $donate->userId = Session::get('user')->id;
        $donate->paymentId = $request->paymentId;
        $donate->currency = $request->currency;
        $donate->amount = (int)$request->amount / 100;
        $donate->type = $request->type;
        $saved = $donate->save();

        $recipient_email = Session::get('user')->email;
        $recipient_name = Session::get('user')->name;
        $subject = "Thank you for your Donation";
        $data['name'] = Session::get('user')->name;
        $data['amount'] = (int)$request->amount / 100;
        $data['sign'] =  asset('assets/images/sign-abanti-1.png');
        $data['logo'] = asset('assets/images/logo-long-1.png');
        $data['logoSmall'] = asset('assets/images/logo-long-2.png');


        $stripe = new \Stripe\StripeClient(
            config('services.stripe.secret_key')
        );

        $info = $stripe->paymentIntents->retrieve(
            $request->paymentId,
            []
        );
        $data['brand'] =  $info->charges->data[0]->payment_method_details->card->brand;
        $data['last4'] =  $info->charges->data[0]->payment_method_details->card->last4;

        $data['date'] =  date("F j, Y");
        $data['providerId'] = Session::get('user')->provider_id;

        $pdf = PDF::loadView('emails.receipt', $data);

        $sent = Mail::send('emails.donate', $data, function ($m) use ($recipient_email, $recipient_name, $subject, $pdf) {
            $m->subject($subject);
            $m->to($recipient_email, $recipient_name);
            $m->attachData($pdf->output(), "invoice.pdf");
        });

        Session::forget('payment_details');
        return $saved ? true : false;
    }

    public function show(Request $request)
    {
        $donates = Donate::all();
        return view('admin.donate', compact('donates'))->withNav('donation');
    }
    public function sponsorDonateShow()
    {
        $sponsorDonates = Sponsor_donate::all();

        return view('admin.sponsor-donate', compact('sponsorDonates'))->withNav('donation');
    }

    public function sponsorDonateDetails(Request $request)
    {
        $id = $request->id;
        $sponsorDonate = Sponsor_donate::where('id', $id)->first();

        $details = json_decode($sponsorDonate->sponsor_details);

        return view('admin.sponsor-donate-details', compact('details'));
    }

    public function create()
    {
        return view('admin.donate-create')->withNav('donate');
    }


    public function manualStore(Request $request)
    {

        $bytes = random_bytes(20);
        $paymentId = bin2hex($bytes);

        $donate = new Donate;
        $donate->userId = 1;
        $donate->paymentId = $paymentId;
        $donate->currency = $request->currency;
        $donate->amount = (int)$request->amount;
        $donate->type = $request->type;
        $saved = $donate->save();

        if ($request->email && $request->name) {

            $recipient_email = $request->email;
            $recipient_name = $request->name;
            $subject = "Thank you for your Donation";
            $data['name'] = $request->name;
            $data['amount'] = (int)$request->amount;
            $data['sign'] =  asset('assets/images/sign-abanti-1.png');
            $data['logo'] = asset('assets/images/logo-long-1.png');
            $data['logoSmall'] = asset('assets/images/logo-long-2.png');

            $sent = Mail::send('emails.donate', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
                $m->subject($subject);
                $m->to($recipient_email, $recipient_name);
            });
        }


        if ($saved) {
            Alert::alert('Manual donate created successful', 'success', 'Successful');
        } else {
            Alert::alert('Manual donate create failed', 'danger', 'Error');
        }
        return back();
    }
}
