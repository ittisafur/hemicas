<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\Cause;
use App\Models\Faq;
use App\Models\Faqs_section;
use App\Models\Donate;
use App\Models\User;
use App\Models\Sponsor;
use App\Models\Sponsor_donate;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Models\Zakat;

class IndexController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51HiZxUF46HUW1Zrs9lY5aFqXW5RZMyvBXUMQivTmrdxaHRfaEbp9Kjmw1PUfZfEtSwrSb6CNN6QVzlwiRS6K34pD00QykfsqfV'
        // );
        // $info = $stripe->paymentIntents->retrieve(
        //     'pi_1HvgaeF46HUW1ZrsfbOUnp2V',
        //     []
        // );
        // dd($info->charges->data[0]->payment_method_details->card->brand);

        $causes =  Cause::where(['status' => 'active'])->get();
        return view('index', compact('causes'));
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function mission()
    {
        return view('frontend.mission');
    }

    public function vision()
    {
        return view('frontend.vision');
    }

    public function faq()
    {
        $faqs =  Faq::where(['status' => 'active'])->get();
        $faqs = $faqs->groupBy('section');

        $sections = Faqs_section::all();

        return view('frontend.faq', compact('faqs', 'sections'));
    }


    public function research()
    {
        $causes =  Cause::where(['status' => 'active'])->get();
        return view('frontend.research', compact('causes'));
    }

    public function sponsor()
    {
        //$sponsors =  Sponsor::where(['status' => 'active'])->get();
        $sponsors = Sponsor::where(['status' => 'active'])->orderBy('serialNumber', 'asc')->get();
        return view('frontend.sponsor', compact('sponsors'));
    }

    public function sponsorDetails($id)
    {

        $sponsor = Sponsor::where(['id' => $id, 'status' => 'active'])->first();
        $getAllSponsor =  Sponsor::latest()->take(8)->get();

        if ($sponsor) {
            return view('frontend.sponsor-details', compact('sponsor', 'getAllSponsor'));
        } else {
            $sponsors =  Sponsor::where(['status' => 'active'])->get();
            return view('frontend.sponsor', compact('sponsors'));
        }
    }

    public function sendGifts()
    {
        return view('frontend.send-gifts');
    }

    public function work()
    {
        return view('frontend.work');
    }

    public function program()
    {
        return view('frontend.program');
    }

    public function dashboard(Request $request)
    {
        if (!Session::has('user')) {
            return redirect()->route('landing');
        }

        $users       =   User::where(['id' => Session::get('user')->id])->first();
        $donates       =   Donate::where(['userId' => Session::get('user')->id])->get();
        $sponsorDonates = Sponsor_donate::where(['userId' => Session::get('user')->id])->get();
        $zakats = Zakat::where(['userId' => Session::get('user')->id])->get();

        if (!$users) {
            return redirect()->route('landing');
        }


        if ($request->query('data')) {
            $stripe = new \Stripe\StripeClient(
                config('services.stripe.secret_key')
            );
            $response = $stripe->checkout->sessions->retrieve(
                $request->query('data'),
                []
            );

            $donate = new Donate;
            $donate->userId = Session::get('user')->id;
            $donate->paymentId = $response->id;
            $donate->currency = $response->currency;
            $donate->amount = (int)$response->amount_total / 100;
            $donate->type = "monthly";
            $saved = $donate->save();

            $recipient_email = Session::get('user')->email;
            $recipient_name = Session::get('user')->name;
            $subject = "Thank you for your Donation";
            $data['name'] = Session::get('user')->name;
            $data['amount'] = (int)$response->amount_total / 100;
            $data['logoSmall'] = asset('assets/images/logo-long-2.png');

            Mail::send('emails.subscription', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
                $m->subject($subject);
                $m->to($recipient_email, $recipient_name);
            });

            // $recipient_email = Session::get('user')->email;
            // $recipient_name = Session::get('user')->name;
            // $subject = "Thank you for your Donation";
            // $data['name'] = Session::get('user')->name;
            // $data['amount'] = (int)$response->amount_total / 100;
            // $data['sign'] =  asset('assets/images/sign-abanti-1.png');
            // $data['logo'] = asset('assets/images/logo-long-1.png');
            // $data['logoSmall'] = asset('assets/images/logo-long-2.png');

            // $info = $stripe->paymentIntents->retrieve(
            //     $response->payment_intent,
            //     []
            // );
            // $data['brand'] =  $info->charges->data[0]->payment_method_details->card->brand;
            // $data['last4'] =  $info->charges->data[0]->payment_method_details->card->last4;

            // $data['date'] =  date("F j, Y");
            // $data['providerId'] = Session::get('user')->provider_id;

            // $pdf = PDF::loadView('emails.receipt', $data);

            // $sent = Mail::send('emails.donate', $data, function ($m) use ($recipient_email, $recipient_name, $subject, $pdf) {
            //     $m->subject($subject);
            //     $m->to($recipient_email, $recipient_name);
            //     $m->attachData($pdf->output(), "invoice.pdf");
            // });

            return redirect('dashboard');
        }
        return view('frontend.dashboard', compact('users', 'donates', 'sponsorDonates', 'zakats'));
    }

    public function userUpdate(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->billingAddress = $request->billingAddress;
        //$user->password = md5($request->password);
        $saved = $user->save();
        return $saved ? true : false;
    }

    public function passwordUpdate(Request $request)
    {
        $user = User::where(['id' => $request->id])->first();
        $updatePassword = User::find($request->id);
        $updatePassword->password = md5($request->password);
        $saved = $updatePassword->save();
        return $saved ? true : false;
    }
}
