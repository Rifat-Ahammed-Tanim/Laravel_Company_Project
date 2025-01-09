<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AwesomeThing;
use Illuminate\Http\Request;

class AwesomeThingController extends Controller
{
    // 1. Display all awesome things in the backend
    public function index()
    {
        $awesomeThings = AwesomeThing::all();
        return view('backend.awesome_things.index', compact('awesomeThings'));
    }

    // 2. Show form to create a new awesome thing
    public function create()
    {
        return view('backend.awesome_things.create');
    }

    // 3. Store a new awesome thing in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        AwesomeThing::create($request->all());
        return redirect()->route('admin.awesome.index')->with('success', 'Awesome Thing added successfully');
    }

    // 4. Show form to edit an existing awesome thing
    public function edit($id)
    {
        $awesomeThing = AwesomeThing::findOrFail($id);
        return view('backend.awesome_things.edit', compact('awesomeThing'));
    }

    // 5. Update an existing awesome thing
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $awesomeThing = AwesomeThing::findOrFail($id);
        $awesomeThing->update($request->all());
        return redirect()->route('admin.awesome.index')->with('success', 'Awesome Thing updated successfully');
    }

    // 6. Delete an awesome thing
    public function destroy($id)
    {
        $awesomeThing = AwesomeThing::findOrFail($id);
        $awesomeThing->delete();
        return redirect()->route('admin.awesome.index')->with('success', 'Awesome Thing deleted successfully');
    }
}
