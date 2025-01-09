<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurMission;

class AdminAboutOurMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_mission = OurMission::first();
        return view('backend.about_page.about_our_mission', compact('our_mission'));
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
            'sub_title' => 'required',
            'description' => 'required'
        ]);

        $our_mission = OurMission::first();
        $our_mission->title = $request->title;
        $our_mission->sub_title = $request->sub_title;
        $our_mission->description = $request->description;

        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,JPG,jpg,png,gif,svg,webp,bmp'
            ]);

            if ($our_mission->image && file_exists(public_path($our_mission->image))) {
                unlink(public_path($our_mission->image));
            }

            $file_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/'), $file_name);
            $save_url = 'uploads/' . $file_name;

            $our_mission->image = $save_url;
        }

        $our_mission->save();

        return redirect()->route('admin.our_mission');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
