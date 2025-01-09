<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AdminAchievementController extends Controller
{
    // Read operation to display the achievements
    public function index()
    {
        // Get all the 4 achievements
        $achievements = Achievement::all();
        return view('backend.achievement.index', compact('achievements'));
    }

    // Update operation to save changes to the achievements
    public function update(Request $request)
    {
        // Loop through each achievement to update them
        foreach ($request->achievements as $id => $achievementData) {
            Achievement::where('id', $id)->update([
                'title' => $achievementData['title'],
                'description' => $achievementData['description']
            ]);
        }

        // return redirect()->route('admin.testimonials.index')
        //     ->with('alert-type', 'success')
        //     ->with('message', 'Testimonial created successfully.');

        // return redirect()->route('backend.achievement.index')->with('success', 'Achievements updated successfully!');

        return redirect()->route('backend.achievement.index')
        ->with('alert-type', 'success')
        ->with('message', 'Achievements Update Successfully!');
    }
}
