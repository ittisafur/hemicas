<?php



namespace App\Http\Controllers;



use App\Models\Success_story;

use Alert;

use Path;

use App\Functions\Image;



use Illuminate\Http\Request;



class SuccessStoryController extends Controller

{

    public function index()

    {

        $successes = Success_story::latest("storyDate")->get();

        $success = Success_story::latest("storyDate")->take(1)->first();

        return view('frontend.success', compact('successes', 'success'));

    }



    public function successStoryDetails($id)

    {

        $successes = Success_story::latest("storyDate")->get();

        $success = Success_story::where('id', $id)->first();

        return view('frontend.success', compact('successes', 'success'));

    }



    public function show(Request $request)

    {

        $successes = Success_story::all();

        return view('admin.success', compact('successes'))->withNav('success');

    }

    public function create()

    {

        return view('admin.success-create')->withNav('success');

    }



    public function store(Request $request)

    { 



        $destinationPath = Path::success();

        $success = new Success_story;

        $success->title = $request->title;

        $success->description = $request->description ? $request->description : "";

        $success->video = $request->video ? $request->video : "";

        $success->storyDate = $request->storyDate;

        $success->image = Image::saveSlimImage('successImage', $destinationPath);

        $saved = $success->save();





        if ($saved) {

            Alert::alert('Success story created successful', 'success', 'Successful');

        } else {

            Alert::alert('Success story failed', 'danger', 'Error');

        }

        return back();

    }

    



    public function edit(Request $request)

    {

        $id = $request->id;

        $success = Success_story::where('id', $id)->first();

        return view('admin.success-edit', compact('success'))->withNav('success');

    }



    public function update(Request $request)

    {



        $destinationPath = Path::success();

        $success = Success_story::find($request->id);

        $success->title = $request->title;

        $success->description = $request->description;

        $success->video = $request->video ? $request->video : "";

        $success->storyDate = $request->storyDate;

        $success->status = $request->status;

        $success->image = Image::saveSlimImage('successImage', $destinationPath);

        $update = $success->save();



        if ($update) {

            Alert::alert('Success story updated successful', 'success', 'Successful');

        } else {

            Alert::alert('Success story update failed', 'danger', 'Error');

        }

        return back();

    }

}

