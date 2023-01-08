<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Alert;
use Path;
use App\Functions\Image;
use Session;
use App\Models\Sponsor_donate;
use Illuminate\Support\Facades\Mail;
use PDF;

class SponsorController extends Controller
{
    public function create()
    {
        return view('admin.sponsor-create')->withNav('sponsor');
    }

    public function show(Request $request)
    {
        $sponsors = Sponsor::all();
        return view('admin.sponsor', compact('sponsors'))->withNav('sponsor');
    }

    public function store(Request $request)
    {
        $destinationPath = Path::sponsors();
        $sponsor = new Sponsor;
        $sponsor->name = $request->name ? $request->name : "";
        $sponsor->age = $request->age ? $request->age : "";
        $sponsor->amount = $request->amount ? $request->amount : "";
        $sponsor->gender = $request->gender ? $request->gender : "";
        $sponsor->dob = $request->dob ? $request->dob : "";
        $sponsor->projectArea = $request->projectArea ? $request->projectArea : "";
        $sponsor->noOfSiblings = $request->noOfSiblings ? $request->noOfSiblings : "";

        $sponsor->goesToSchool = $request->goesToSchool ? $request->goesToSchool : "";
        $sponsor->sourceOfEnergy = $request->sourceOfEnergy ? $request->sourceOfEnergy : "";
        $sponsor->guardianEmployment = $request->guardianEmployment ? $request->guardianEmployment : "";
        $sponsor->ageRange = $request->ageRange ? $request->ageRange : "";

        $sponsor->hobbies = $request->hobbies ? $request->hobbies : "";
        $sponsor->aimInLife = $request->aimInLife ? $request->aimInLife : "";
        $sponsor->favouriteSubject = $request->favouriteSubject ? $request->favouriteSubject : "";
        $sponsor->grade = $request->grade ? $request->grade : "";
        $sponsor->dreams = $request->dreams ? $request->dreams : "";
        $sponsor->favouriteSports = $request->favouriteSports ? $request->favouriteSports : "";
        $sponsor->monhtlyProtein = $request->monhtlyProtein ? $request->monhtlyProtein : "";
        $sponsor->householdIncome = $request->householdIncome ? $request->householdIncome : "";
        $sponsor->favouriteSubject = $request->favouriteSubject ? $request->favouriteSubject : "";
        $sponsor->type = $request->type ? $request->type : "";
        $sponsor->isSidebar = $request->isSidebar;
        $sponsor->image = $request->image = Image::saveSlimImage('childImage', $destinationPath);;
        $saved = $sponsor->save();

        if ($saved) {
            $lastInsertedId = $sponsor->id;
            Sponsor::where('id', $lastInsertedId)
                ->update(['serialNumber' => $lastInsertedId]);

            Alert::alert('Sponsor created successful', 'success', 'Successful');
        } else {
            Alert::alert('Sponsor create failed', 'danger', 'Error');
        }
        return back();
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $sponsor = Sponsor::where('id', $id)->first();
        return view('admin.sponsor-edit', compact('sponsor'))->withNav('sponsor');
    }
    public function update(Request $request)
    {
        //dd($request);

        $destinationPath = Path::sponsors();
        $sponsor = Sponsor::find($request->id);
        $sponsor->name = $request->name ? $request->name : "";
        $sponsor->age = $request->age ? $request->age : "";
        $sponsor->amount = $request->amount ? $request->amount : "";
        $sponsor->gender = $request->gender ? $request->gender : "";
        $sponsor->dob = $request->dob ? $request->dob : "";
        $sponsor->projectArea = $request->projectArea ? $request->projectArea : "";
        $sponsor->noOfSiblings = $request->noOfSiblings ? $request->noOfSiblings : "";

        $sponsor->goesToSchool = $request->goesToSchool ? $request->goesToSchool : "";
        $sponsor->sourceOfEnergy = $request->sourceOfEnergy ? $request->sourceOfEnergy : "";
        $sponsor->guardianEmployment = $request->guardianEmployment ? $request->guardianEmployment : "";
        $sponsor->ageRange = $request->ageRange ? $request->ageRange : "";


        $sponsor->hobbies = $request->hobbies ? $request->hobbies : "";
        $sponsor->aimInLife = $request->aimInLife ? $request->aimInLife : "";
        $sponsor->favouriteSubject = $request->favouriteSubject ? $request->favouriteSubject : "";
        $sponsor->grade = $request->grade ? $request->grade : "";
        $sponsor->dreams = $request->dreams ? $request->dreams : "";
        $sponsor->favouriteSports = $request->favouriteSports ? $request->favouriteSports : "";
        $sponsor->monhtlyProtein = $request->monhtlyProtein ? $request->monhtlyProtein : "";
        $sponsor->householdIncome = $request->householdIncome ? $request->householdIncome : "";
        $sponsor->favouriteSubject = $request->favouriteSubject ? $request->favouriteSubject : "";
        $sponsor->type = $request->type ? $request->type : "";
        $sponsor->status = $request->status ? $request->status : "active";
        $sponsor->isSidebar = $request->isSidebar;
        $sponsor->image = $request->image = Image::saveSlimImage('childImage', $destinationPath);;
        $update = $sponsor->save();

        if ($update) {
            Alert::alert('Sponsor updated successful', 'success', 'Successful');
        } else {
            Alert::alert('Sponsor update failed', 'danger', 'Error');
        }
        return back();
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $sponsor = Sponsor::find($id);
        $delete = $sponsor->delete();
        if ($delete) {
            return back();
        } else {
            return back();
        }
        return redirect('admin/sponsor');
    }

    public function cart()
    {

        //return view('frontend.sponsor-cart');
        $sponsor = Sponsor::latest()->take(8)->get();

        if ($sponsor) {
            return view('frontend.sponsor-cart', compact('sponsor'));
        } else {
            $sponsors =  Sponsor::where(['status' => 'active'])->get();
            return redirect()->route('sponsor')->with(['sponsors' => $sponsors]);
            //return view('frontend.sponsor', compact('sponsors'));
        }
    }

    public function processSponsorCheckout(Request $request)
    {
        //dd($request);
        if (Session::has('user')) {
            \Stripe\Stripe::setApiKey(config('services.stripe.secret_key'));

            $amount = $request->amount;
            $amount *= 100;
            $amount = (int) $amount;
            $sponsor_details = $request->sponsorDetails;

            if (Session::has('user')) {

                session(['isCart' => false]);

                $payment_intent = \Stripe\PaymentIntent::create([
                    'description' => 'Hemicas Angels Sponsor Payment',
                    'amount' => $amount,
                    'currency' => 'USD',
                    'payment_method_types' => ['card'],
                ]);
                $intent = $payment_intent->client_secret;
                session(['payment_details' => (int) $amount / 100, 'sponsor_details' => $sponsor_details]);
                return $intent;
            } else {
                $sponsors =  Sponsor::where(['status' => 'active'])->get();
                return redirect()->route('sponsor')->with(['sponsors' => $sponsors]);
                //return view('frontend.sponsor', compact('sponsors'));
            }
        } else {
            session(['isCart' => true]);
            return false;
        }
    }

    public function sponsorCheckout(Request $request)
    {
        //dd($request->query('data'));
        if (Session::get('user') && $request->query('data')) {
            $intent = $request->query('data');
            return view('frontend.sponsor-checkout', compact('intent'));
        } else {
            return redirect()->route('landing');
        }
    }

    public function sponsorStore(Request $request)
    {

        $donate = new Sponsor_donate;
        $donate->userId = Session::get('user')->id;
        $donate->paymentId = $request->paymentId;
        $donate->sponsor_details = json_encode(Session::get('sponsor_details'));
        $donate->currency = $request->currency;
        $donate->amount = (int)$request->amount / 100;
        $donate->type = $request->type;
        $saved = $donate->save();

        $recipient_email = Session::get('user')->email;
        $recipient_name = Session::get('user')->name;
        $subject = "Thank you for your Sponsorship";
        $data['name'] = Session::get('user')->name;
        $data['amount'] = (int)$request->amount / 100;
        $data['sign'] =  asset('assets/images/sign-abanti-1.png');
        $data['logo'] = asset('assets/images/logo-long-1.png');
        $data['logoSmall'] = asset('assets/images/logo-long-2.png');

        $details = json_encode(Session::get('sponsor_details'));
        foreach (json_decode($details) as $detail) {
            $childName[] = $detail->name;
        }

        $data['childName'] = implode(',', $childName);

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

        $pdf = PDF::loadView('emails.receipt-sponsor', $data);


        $sent = Mail::send('emails.sponsor', $data, function ($m) use ($recipient_email, $recipient_name, $subject, $pdf) {
            $m->subject($subject);
            $m->to($recipient_email, $recipient_name);
            $m->attachData($pdf->output(), "invoice.pdf");
        });

        Session::forget(['payment_details', 'sponsor_details']);
        return $saved ? true : false;
    }

    public function order(Request $request)
    {
        $sponsors = Sponsor::orderBy('serialNumber', 'asc')->get();
        return view('admin.sponsor-list-order', compact('sponsors'))->withNav('sponsor');
    }

    public function sort(Request $request)
    {
        // dd($request->data);
        foreach ($request->data as $item => $position) {
            $saved = Sponsor::where('id', $position)
                ->update(['serialNumber' => $item + 1]);
        }
        return $saved ? true : false;
    }
}
