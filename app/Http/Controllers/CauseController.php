<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Alert;
use Path;
use App\Functions\Image;

use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function show(Request $request)
    {
        $causes = Cause::all();
        return view('admin.cause', compact('causes'))->withNav('cause');
    }

    public function store(Request $request)
    {

        $destinationPath = Path::causes();
        $cause = new Cause;
        $cause->cause = $request->cause;
        $cause->title = $request->title;
        $cause->description = $request->description ? $request->description : "";
        $cause->image = Image::saveSlimImage('causeImage', $destinationPath);
        $saved = $cause->save();


        if ($saved) {
            Alert::alert('Cause created successful', 'success', 'Successful');
        } else {
            Alert::alert('Cause create failed', 'danger', 'Error');
        }
        return back();
    }

    public function create()
    {
        return view('admin.cause-create')->withNav('cause');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $cause = Cause::where('id', $id)->first();
        return view('admin.cause-edit', compact('cause'))->withNav('cause');
    }

    public function update(Request $request)
    {
        $destinationPath = Path::causes();
        $cause = Cause::find($request->id);
        $cause->cause = $request->cause;
        $cause->title = $request->title;
        $cause->description = $request->description;
        $cause->status = $request->status;
        $cause->image = Image::saveSlimImage('causeImage', $destinationPath);
        $update = $cause->save();

        if ($update) {
            Alert::alert('Cause updated successful', 'success', 'Successful');
        } else {
            Alert::alert('Cause update failed', 'danger', 'Error');
        }
        return back();
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $cause = Cause::find($id);
        $delete = $cause->delete();
        if ($delete) {
            return back();
        } else {
            return back();
        }
        return redirect('admin/cause');
    }
}
