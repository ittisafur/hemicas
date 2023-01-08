<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Alert;
use Path;

class IdeaController extends Controller
{
    public function index()
    {
        return view('frontend.idea');
    }


    public function show(Request $request)
    {
        $ideas = Idea::all();
        return view('admin.idea', compact('ideas'))->withNav('idea');
    }


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]
        );

        $filename = "";
        if ($request->hasFile("idea_file")) {

            $this->validate(
                $request,
                [
                    'idea_file' => "mimetypes:application/pdf|max:10000",

                ]
            );

            $destinationPath = Path::ideas();
            $name = $request->file('idea_file')->getClientOriginalName();
            $extension = $request->file('idea_file')->extension();
            $filename = rand(11111111, 99999999) . '.' . $name;
            $request->file('idea_file')->move($destinationPath, $filename);
        }


        $idea = new idea;
        $idea->name = $request->name;
        $idea->email = $request->email;
        $idea->location = $request->location ? $request->location : "";
        $idea->age = $request->age ? $request->age : "";
        $idea->profession = $request->profession ? $request->profession : "";
        $idea->ideaFile = $filename;
        $idea->message = $request->message;

        $save = $idea->save();
        if ($save) {
            return true;
        } else {
            return false;
        }
    }
}
