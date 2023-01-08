<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Faqs_section;
use Alert;

class FaqController extends Controller
{
    public function show(Request $request)
    {
        $faqs = Faq::all();
        return view('admin.faq', compact('faqs'))->withNav('faq');
    }

    public function store(Request $request)
    {
        $faq = new Faq;
        $faq->section = $request->section;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->sorting = "";
        $saved = $faq->save();


        if ($saved) {
            Alert::alert('Faq created successful', 'success', 'Successful');
        } else {
            Alert::alert('Faq creation failed', 'danger', 'Error');
        }
        return back();
    }

    public function create()
    {
        $faqs_sections = Faqs_section::all();
        return view('admin.faq-create', compact('faqs_sections'))->withNav('faq');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $faq = Faq::where('id', $id)->first();
        return view('admin.faq-edit', compact('faq'))->withNav('faq');
    }

    public function update(Request $request)
    {

        $faq = faq::find($request->id);
        //$faq->section = $request->section;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->sorting = "";
        $faq->status = $request->status;
        $update = $faq->save();

        if ($update) {
            Alert::alert('Faq updated successful', 'success', 'Successful');
        } else {
            Alert::alert('Faq update failed', 'danger', 'Error');
        }
        return back();
    }
}
