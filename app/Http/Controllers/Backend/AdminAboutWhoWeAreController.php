<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhoWeAre;

class AdminAboutWhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whoWeAre = WhoWeAre::first();
        return view('backend.about_page.who_we_are', [
            'who_we_are' => $whoWeAre
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image' 
        ]);
    
        $whoWeAre = WhoWeAre::first();
        $whoWeAre->title = $request->title;
        $whoWeAre->sub_title = $request->sub_title;
        $whoWeAre->description = $request->description;
    
        if ($request->hasFile('image')) {
           
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
    
            $request->file('image')->move(public_path('images'), $filename);

            $whoWeAre->image = 'images/' . $filename; 
        }
    
        $whoWeAre->save();
    
        return redirect()
            ->route('about.whoWeAre.index')
            ->with('success', 'Who We Are updated successfully');
    }
    


}
