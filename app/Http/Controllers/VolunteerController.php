<?php

namespace App\Http\Controllers;

use Alert;
use Path;
use File;
use Functions;
use Illuminate\Support\Facades\Mail;
use App\Models\Volunteer;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VolunteerController extends Controller
{

    public function create()
    {
        return view('frontend.volunteer-create');
    }

    public function show(Request $request)
    {
        $volunteers = Volunteer::all();
        return view('admin.volunteer', compact('volunteers'))->withNav('volunteer');
    }

    public function store(Request $request)
    {
        $filename = "";
        if ($request->hasFile("cv")) {

            $this->validate(
                $request,
                [
                    'cv' => "mimetypes:application/pdf|max:10000",

                ]
            );

            $destinationPath = Path::volunteers();
            $name = $request->file('cv')->getClientOriginalName();
            $extension = $request->file('cv')->extension();
            $filename = rand(11111111, 99999999) . '.' . $name;
            $request->file('cv')->move($destinationPath, $filename);
        }

        $volunteer = new Volunteer;
        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->branch = $request->branch;
        $volunteer->position = $request->position ? $request->position : "";
        $volunteer->phoneNumber = $request->phoneNumber;
        $volunteer->message = $request->message ? $request->message : "";
        $volunteer->cv = $filename;
        $save = $volunteer->save();

        $recipient_email = $request->email;
        $recipient_name = $request->name;
        $subject = "Voulnteer Request";
        $data['name'] = $request->name;

        Mail::send('emails.volunteer', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
            $m->subject($subject);
            $m->to($recipient_email, $recipient_name);
        });


        if ($save) {
            return true;
        } else {
            return false;
        }
    }
}
