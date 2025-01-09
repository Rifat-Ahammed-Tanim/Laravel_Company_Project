<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogBanner;
use Illuminate\Http\Request;

class BlogBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_banner = BlogBanner::first();
        return view('backend.blog_banner.blog_banner', compact('blog_banner'));
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
    
        $blog_banner = BlogBanner::first();
        $blog_banner->title = $request->title;
        $blog_banner->description = $request->description;
    
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,JPG,jpg,png,gif,svg,webp,bmp'
            ]);
    
            if ($blog_banner->image && file_exists(public_path($blog_banner->image))) {
                unlink(public_path($blog_banner->image));
            }
    
            $file_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/'), $file_name);
            $save_url = 'uploads/' . $file_name;
    
            $blog_banner->image = $save_url;
        }
    
        $blog_banner->save();
    
        return redirect()->route('admin.blog_banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
