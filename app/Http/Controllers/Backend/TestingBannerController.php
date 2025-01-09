<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TestingBanner;
use Illuminate\Http\Request;

class TestingBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testing = TestingBanner::first();
        return view('backend.sqa_services_page.testing_banner', compact('testing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
    
        $testing = TestingBanner::first();
        $testing->title = $request->title;
        $testing->description = $request->description;
    
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,JPG,jpg,png,gif,svg,webp,bmp'
            ]);
    
            if ($testing->image && file_exists(public_path($testing->image))) {
                unlink(public_path($testing->image));
            }
    
            $file_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/'), $file_name);
            $save_url = 'uploads/' . $file_name;
    
            $testing->image = $save_url;
        }
    
        $testing->save();
    
        return redirect()->route('admin.testing');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
