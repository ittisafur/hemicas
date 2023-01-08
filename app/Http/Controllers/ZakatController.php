<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Models\Zakat;

class ZakatController extends Controller
{
    public function index()
    {
        return view('frontend.zakat');
    }

    public function processZakatCheckout(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret_key'));

        $amount = $request->amount;
        $amount *= 100;
        $amount = (int) $amount;

        if ($request->type === "zakat" && Session::has('user')) {


            $payment_intent = \Stripe\PaymentIntent::create([
                'description' => 'Stripe Test Payment',
                'amount' => $amount,
                'currency' => 'USD',
                'description' => 'Payment From Hemicas Angels',
                'payment_method_types' => ['card'],
            ]);
            $intent = $payment_intent->client_secret;
            session(['payment_details' => (int) $amount / 100]);
            return $intent;
        }
    }

    public function zakatCheckout(Request $request)
    {
        //dd($request->query('data'));
        if (Session::get('user') && $request->query('data')) {
            $intent = $request->query('data');
            return view('frontend.zakatCheckout', compact('intent'));
        } else {
            return redirect()->route('landing');
        }
    }

    public function store(Request $request)
    {

        $zakat = new Zakat;
        $zakat->userId = Session::get('user')->id;
        $zakat->paymentId = $request->paymentId;
        $zakat->currency = $request->currency;
        $zakat->amount = (int)$request->amount / 100;
        $zakat->type = $request->type;
        $saved = $zakat->save();

        $recipient_email = Session::get('user')->email;
        $recipient_name = Session::get('user')->name;
        $subject = "Thank you for your Zakat";
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

        $sent = Mail::send('emails.zakat', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
            $m->subject($subject);
            $m->to($recipient_email, $recipient_name);
        });

        Session::forget('payment_details');
        return $saved ? true : false;
    }

    public function show(Request $request)
    {
        $zakats = Zakat::all();
        return view('admin.zakat', compact('zakats'))->withNav('donation');
    }
}
