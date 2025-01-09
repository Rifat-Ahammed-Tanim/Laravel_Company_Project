<?php


use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AdminHomeBannerController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Recruiter\RecruiterController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminHomeServiceController;
use App\Http\Controllers\Backend\AdminHomeTesimonialController;
use App\Http\Controllers\Backend\AwesomeThingController;
use App\Http\Controllers\Backend\AdminAchievementController;
use App\Http\Controllers\Backend\AboutBannerController;
use App\Http\Controllers\Backend\AboutOurMission;
use App\Http\Controllers\Backend\AdminAboutOurMissionController;
use App\Http\Controllers\Backend\AdminAboutOurStrategyController;
use App\Http\Controllers\Backend\AdminAboutOurVisionController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\AdminAboutWhoWeAreController;
use App\Http\Controllers\Backend\BlogBannerController;
use App\Http\Controllers\Backend\BlogCardController;
use App\Http\Controllers\Backend\ConsultationController;
use App\Http\Controllers\Backend\ExpectBannerController;
use App\Http\Controllers\Backend\HomeFormController;
use App\Http\Controllers\Backend\TestingBannerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend 
Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/job', [PageController::class, 'JobPage'])->name('job');
Route::get('/sqa-service', [PageController::class, 'SqaServices'])->name('sqa-service');
Route::get('/sqa-expert', [PageController::class, 'SqaExpert'])->name('sqa-expert');
Route::get('/about', [PageController::class, 'AboutPage'])->name('about');
Route::get('/blog', [PageController::class, 'BlogPage'])->name('blog');
Route::get('/free', [PageController::class, 'Consultation'])->name('consultation');







// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Admin Dashborad
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'AdminDashboard'])->name('admin.dashbord');

    // Home Page
    // Home Banner
    Route::get('/admin/home-banner', [AdminHomeBannerController::class, 'Index'])->name('admin.home-banner');
    Route::post('/admin/home-banner-update', [AdminHomeBannerController::class, 'BannerUpdate'])->name('admin.home-banner-update');

    // Home Form
    // Frontend route to handle form submission
    Route::post('/submit-qa-consultation', [HomeFormController::class, 'store'])->name('qaConsultation.submit');

    Route::prefix('admin')->group(function () {
        Route::get('/qa-consultation', [HomeFormController::class, 'index'])->name('qaConsultation.index');
        Route::delete('/qa-consultation/{id}', [HomeFormController::class, 'destroy'])->name('qaConsultation.delete');
    });

    // Our-Services
    Route::prefix('admin')->group(function () {
        Route::get('services', [AdminHomeServiceController::class, 'index'])->name('admin.services.index');
        Route::get('services/create', [AdminHomeServiceController::class, 'create'])->name('admin.services.create');
        Route::post('services', [AdminHomeServiceController::class, 'store'])->name('admin.services.store');
        Route::get('services/{service}/edit', [AdminHomeServiceController::class, 'edit'])->name('admin.services.edit');
        Route::put('services/{service}', [AdminHomeServiceController::class, 'update'])->name('admin.services.update');
        Route::delete('services/{service}', [AdminHomeServiceController::class, 'destroy'])->name('admin.services.destroy');
    });

    // Testimonial Controller
    Route::prefix('admin')->group(function () {
        Route::get('/testimonials', [AdminHomeTesimonialController::class, 'index'])->name('admin.testimonials.index');
        Route::get('/testimonials/create', [AdminHomeTesimonialController::class, 'create'])->name('admin.testimonials.create');
        Route::post('/testimonials', [AdminHomeTesimonialController::class, 'store'])->name('admin.testimonials.store');
        Route::get('/testimonials/{id}/edit', [AdminHomeTesimonialController::class, 'edit'])->name('admin.testimonials.edit');
        Route::put('/testimonials/{id}', [AdminHomeTesimonialController::class, 'update'])->name('admin.testimonials.update');
        Route::delete('/testimonials/{id}', [AdminHomeTesimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
    });
    //Awesome Thing Controller
    Route::prefix('admin')->group(function () {
        // Route resource for AwesomeThingController (CRUD operations)
        Route::resource('awesome', AwesomeThingController::class)->names([
            'index' => 'admin.awesome.index',
            'create' => 'admin.awesome.create',
            'store' => 'admin.awesome.store',
            'edit' => 'admin.awesome.edit',
            'update' => 'admin.awesome.update',
            'destroy' => 'admin.awesome.destroy',
        ]);
    });
    // Achievement
    Route::get('/admin/achievements', [AdminAchievementController::class, 'index'])->name('backend.achievement.index');
    Route::post('/admin/achievements/update', [AdminAchievementController::class, 'update'])->name('backend.achievement.update');

    // Services Page
    // SQA_Services page
    // Testing Banner
    Route::get('/admin/testing', [TestingBannerController::class, 'index'])->name('admin.testing');
    Route::post('/admin/testing_update', [TestingBannerController::class, 'update'])->name('admin.testing-update');

    // SQA Expert Page
    // Expert Banner
    Route::get('/admin/expert', [ExpectBannerController::class, 'index'])->name('admin.expect');
    Route::post('/admin/expert', [ExpectBannerController::class, 'update'])->name('admin.expect-update');


    // About Page
    // About Banner 
    Route::prefix('admin/about-banner')->group(function () {
        Route::get('/', [AboutBannerController::class, 'index'])->name('about.banner.index');
        Route::get('/edit', [AboutBannerController::class, 'edit'])->name('about.banner.edit');
        Route::post('/', [AboutBannerController::class, 'update'])->name('about.banner.update');
    });
    //Who Are Are
    Route::prefix('about/whoWeAre')->group(function () {
        Route::get('/', [AdminAboutWhoWeAreController::class, 'index'])
            ->name('about.whoWeAre.index');
        Route::get('/edit', [AdminAboutWhoWeAreController::class, 'edit'])->name('about.whoWeAre.edit');
        Route::post('/update', [AdminAboutWhoWeAreController::class, 'update'])->name('about.whoWeAre.update');
    });
    // Our Mission
    Route::get('/admin/our_mission', [AdminAboutOurMissionController::class, 'index'])->name('admin.our_mission');
    Route::post('/admin/our_mission_update', [AdminAboutOurMissionController::class, 'update'])->name('admin.our_mission-update');
    // Our Vision
    Route::get('/admin/our_vision', [AdminAboutOurVisionController::class, 'index'])->name('admin.out_vision');
    Route::post('/admin/our_vision_update', [AdminAboutOurVisionController::class, 'update'])->name('admin.our_vision-update');
    // Our Strategy
    Route::get('/admin/our_strategy', [AdminAboutOurStrategyController::class, 'index'])->name('admin.our_strategy');
    Route::post('/admin/our_strategy_update', [AdminAboutOurStrategyController::class, 'update'])->name('admin.our_strategy-update');


    // Blog Page
    // Blog Banner
    Route::get('admin/blog_banner', [BlogBannerController::class, 'index'])->name('admin.blog_banner');
    Route::post('admin/blog_banner_update', [BlogBannerController::class, 'update'])->name('admin.blog_update');

    // Blog Card
    Route::prefix('admin/blog-card')->group(function () {
        Route::get('/', [BlogCardController::class, 'index'])->name('blog_card.index');
        Route::get('/create', [BlogCardController::class, 'create'])->name('blog_card.create');
        Route::post('/', [BlogCardController::class, 'store'])->name('blog_card.store');
        Route::get('/{id}/edit', [BlogCardController::class, 'edit'])->name('blog_card.edit');
        Route::put('/{id}', [BlogCardController::class, 'update'])->name('blog_card.update');
        Route::delete('/{id}', [BlogCardController::class, 'destroy'])->name('blog_card.destroy');
    });


    // Blog Controller **************************************
    Route::prefix('admin')->group(function () {
        Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/blog', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    });


    // // Free Consultation
    // Route::get('/free/consultation', [ConsultationController::class, 'index'])->name('consultation.index');
});

// Blog Card Details
Route::get('blog-details/{blogId}', [
    PageController::class,
    'BlogDetailsPage'
])->name('blog.details');



// Candidate
Route::middleware(['auth', 'role:candidate'])->group(function () {
    Route::get('/candidate/account', [CandidateController::class, 'CandidateAccount'])->name('candidate.account');
});
// Recruiter
Route::middleware(['auth', 'role:recruiter'])->group(function () {
    Route::get('/recruiter/account', [RecruiterController::class, 'RecruiterAccount'])->name('recruiter.account');
});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
