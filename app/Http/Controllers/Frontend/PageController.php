<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use App\Models\AboutBanner;
use App\Models\Blog;
use App\Models\BlogBanner;
use App\Models\BlogCard;
use App\Models\ExpertBanner;
use App\Models\OurMission;
use App\Models\OurStrategy;
use App\Models\OurVision;
use App\Models\TestingBanner;
use App\Models\WhoWeAre;

class PageController extends Controller
{
    public function JobPage()
    {
        return view('frontend.pages.job');
    }

    public function SqaServices()
    {
        $testing = TestingBanner::first();
        return view('frontend.pages.sqa_services', compact('testing'));
    }

    public function SqaExpert()
    {
        $expect = ExpertBanner::first();
        return view('frontend.pages.sqa_experts', compact('expect'));
    }

    public function AboutPage()
    {
        $about_banner = AboutBanner::first(); 
        $whoWeAre = WhoWeAre::first();
        $our_mission = OurMission::first();
        $our_vision = OurVision::first();
        $our_strategy = OurStrategy::first();
        return view('frontend.pages.about', compact('about_banner', 'whoWeAre', 'our_mission', 'our_vision', 'our_strategy'));
    }


    public function BlogPage()
    {
        $blogs = Blog::all();
        $blog_banner = BlogBanner::first();
        $blog_card = BlogCard::paginate(10);

        // dd($blog_card);
        
        return view('frontend.pages.blog',
        compact('blogs', 'blog_banner', 'blog_card'));
    }

    public function BlogDetailsPage($blogId)
    {
        // dd("asdasd");
        $blog = BlogCard::findOrFail($blogId);
     

        return view('frontend.pages.blog_details', [
            'blog' => $blog
        ]);
    }

    public function Consultation()
    {
        return view('frontend.pages.free_consultation');
    }
}
