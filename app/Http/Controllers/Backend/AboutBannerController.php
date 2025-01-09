<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use Illuminate\Http\Request;


class AboutBannerController extends Controller
{
    public function index()
    {
        // Fetch the first banner record
        $banners = AboutBanner::first();
        return view('backend.about_page.about_banner', [
            'about_banner' => $banners
        ]);
    }



    public function update(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
        ]);

        // Find the banner and update the fields
        $banner = AboutBanner::first();
        $banner->title = $request->title;
        $banner->description = $request->description;

        // Handle image upload if available
        if ($request->hasFile('image')) {

            $path = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            
            $banner->image = 'images/' . $request->file('image')->getClientOriginalName();
        }

        $banner->save();

        return redirect()->route('about.banner.index')->with('success', 'Banner updated successfully.');
    }
}
