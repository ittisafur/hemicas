<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Alert;
use Path;
use App\Functions\Image;

class ProgramController extends Controller
{
    public function show(Request $request)
    {
        $programs = Program::all();
        return view('admin.program', compact('programs'))->withNav('program');
    }

    public function store(Request $request)
    {

        $destinationPath = Path::programs();
        $program = new Program;
        $program->title = $request->title;
        $program->description = $request->description ? $request->description : "";
        $program->image = Image::saveSlimImage('programImage', $destinationPath);
        $saved = $program->save();


        if ($saved) {
            Alert::alert('Program created successful', 'success', 'Successful');
        } else {
            Alert::alert('Program create failed', 'danger', 'Error');
        }
        return back();
    }

    public function create()
    {
        return view('admin.program-create')->withNav('program');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $program = Program::where('id', $id)->first();
        return view('admin.program-edit', compact('program'))->withNav('program');
    }

    public function update(Request $request)
    {
        $destinationPath = Path::programs();
        $program = Program::find($request->id);
        $program->title = $request->title;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->image = Image::saveSlimImage('causeImage', $destinationPath);
        $update = $program->save();

        if ($update) {
            Alert::alert('Program updated successful', 'success', 'Successful');
        } else {
            Alert::alert('Program update failed', 'danger', 'Error');
        }
        return back();
    }
}
