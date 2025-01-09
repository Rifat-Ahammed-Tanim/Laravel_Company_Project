<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ExpertBanner;
use Illuminate\Http\Request;

class ExpectBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expect = ExpertBanner::first();
        return view('backend.sqa_expect_page.expect_banner', compact('expect'));
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
    
        $expect = ExpertBanner::first();
        $expect->title = $request->title;
        $expect->description = $request->description;
    
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,JPG,jpg,png,gif,svg,webp,bmp'
            ]);
    
            if ($expect->image && file_exists(public_path($expect->image))) {
                unlink(public_path($expect->image));
            }
    
            $file_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/'), $file_name);
            $save_url = 'uploads/' . $file_name;
    
            $expect->image = $save_url;
        }
    
        $expect->save();
    
        return redirect()->route('admin.expect');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
