<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\AwesomeThing; // Import AwesomeThing model
use App\Models\Achievement;  // Import Achievement model
use App\Models\BlogCard;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $home_banner = HomeBanner::first();  // Fetch the banner
        $services = Service::all();  // Fetch all services
        $testimonials = Testimonial::all(); // Fetch all testimonials
        $awesomeThings = AwesomeThing::all(); // Fetch all awesome things
        $achievements = Achievement::all(); // Fetch all achievements
        $blog = BlogCard::latest()->take(3)->get();
        // dd($blogs);

        // Pass the data to the frontend view
        return view('frontend.home.index', compact('home_banner', 'services', 'testimonials', 'awesomeThings', 'achievements', 'blog'));
    }
}

