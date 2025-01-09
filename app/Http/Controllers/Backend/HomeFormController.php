<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeForm;
use Illuminate\Http\Request;

class HomeFormController extends Controller
{
    public function index()
    {
        // Retrieve all submissions from the database
        $homeForms = HomeForm::all();
        return view('backend.home_form.index', compact('homeForms'));
    }

    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        // Store the form data
        HomeForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect with a success message
        return back()->with('success', 'Your message has been sent!');
    }

    public function destroy($id)
    {
        $homeForm = HomeForm::findOrFail($id);
        $homeForm->delete();

        return redirect()->route('homeform.index')->with('success', 'Submission deleted successfully.');
    }
}
