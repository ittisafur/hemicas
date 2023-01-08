<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('frontend.contact');
    }


    public function show(Request $request)
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'))->withNav('contact');
    }


    public function store(Request $request)
    {

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phoneNumber = $request->phoneNumber;
        $contact->message = $request->message;
        $save = $contact->save();

        $recipient_email = $request->email;
        $recipient_name = $request->name;
        $subject = "Contact Us";
        $data['name'] = $request->name;

        Mail::send('emails.contact', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
            $m->subject($subject);
            $m->to($recipient_email, $recipient_name);
        });

        $subject = "Contact Request";

        Mail::send('emails.contact-admin', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
            $m->subject($subject);
            $m->to(config('mail.from.address'), $recipient_name);
        });


        if ($save) {
            return true;
        } else {
            return false;
        }
    }
}
