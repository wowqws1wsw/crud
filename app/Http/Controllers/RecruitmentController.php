<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Models\Message;

class RecruitmentController extends Controller
{
    public function index()
    {
        $recruitments = Recruitment::paginate(10);
        return view('recruitment.index', compact('recruitments'));
    }

    public function create()
    {
        return view('recruitment.create'); // Make sure this view exists if applicable
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Recruitment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('recruitment.index')->with('success', 'Your message has been submitted successfully.');
    }

    public function edit($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return view('recruitment.edit', compact('recruitment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $recruitment = Recruitment::findOrFail($id);
        $recruitment->update($request->all());

        return redirect()->route('recruitment.index')->with('success', 'Recruitment updated successfully');
    }

    public function destroy($id)
    {
        $recruitment = Recruitment::find($id);

        if (!$recruitment) {
            return redirect()->back()->with('error', 'Recruitment not found!');
        }

        $recruitment->delete();

        return redirect()->back()->with('success', 'Successfully deleted recruitment!');
    }

    public function showMessages()
    {
        $messages = Message::all();
        return view('pages.show_messages', compact('messages'));
    }

    public function show($id)
    {
        $recruitment = Recruitment::find($id);

        if (!$recruitment) {
            return redirect()->route('recruitment.index')->with('error', 'Recruitment not found');
        }

        return view('recruitment.show', compact('recruitment'));
    }
}

