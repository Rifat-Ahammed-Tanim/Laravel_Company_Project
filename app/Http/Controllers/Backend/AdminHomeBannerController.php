<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ImageHelper;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class AdminHomeBannerController extends Controller
{
    // index
    public function Index()
    {
        $home_banner = HomeBanner::first();
        // dd($home_banner);
        return view('admin.pages.home_banner', compact('home_banner'));
    }

    // update
    public function BannerUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);
    
        $home_banner = HomeBanner::first();
        $home_banner->title = $request->title;
        $home_banner->sub_title = $request->sub_title;
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());
    
            $home_banner->photo = 'images/' . $request->file('photo')->getClientOriginalName();
        }

        $home_banner->save();

        return redirect()->route('admin.home-banner')->with('success', 'Home banner updated successfully!');
    }
    
}
