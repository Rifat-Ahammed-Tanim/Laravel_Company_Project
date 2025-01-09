<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminHomeServiceController extends Controller
{
    // Display all services
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index', compact('services'));
    }

    // Show form to create a new service
    public function create()
    {
        return view('backend.services.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'icon' => 'required|string',
        ]);

        Service::create($request->all());
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    // Show form to edit an existing service
    public function edit(Service $service)
    {
        return view('backend.services.edit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:services,title',
            'description' => 'required|unique:services,description',
            'icon' => 'required|string',
        ]);

        // check for duplicate tital or ic

        $service->update($request->all());
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}