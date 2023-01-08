<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClothController extends Controller
{

    public function index()
    {
        return view('frontend.cloth');
    }

    public function show(Request $request)
    {
        $cloths = Cloth::all();
        return view('admin.cloth', compact('cloths'))->withNav('cloth');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'phoneNumber' => 'required',
                'address' => 'required',
                'location' => 'required',
                'pickupDate' => 'required',
                'items' => 'required',
                'comment' => 'required',
            ]
        );
        //dd($request);
        $cloth = new Cloth;
        $cloth->name = $request->name;
        $cloth->email = $request->email;
        $cloth->phone = $request->phoneNumber;
        $cloth->address = $request->address;
        $cloth->location = $request->location ? $request->location : "";
        $cloth->pickupDate = $request->pickupDate ? $request->pickupDate : "";
        $cloth->items = $request->items ? json_encode($request->items) : "";
        $cloth->comment = $request->comment;

        $save = $cloth->save();
        if ($save) {
            return true;
        } else {
            return false;
        }
    }
}
