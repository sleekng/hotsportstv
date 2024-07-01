<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyLogoController;
use App\Http\Controllers\HotsportsProjectsController;
use App\Http\Controllers\InstagramPostController;
use App\Http\Controllers\PCompanyLogoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Models\BlogPost;
use App\Models\Project;
use App\Models\Team;

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\CompanyLogo;
use App\Models\HotsportsProjects;
use App\Models\InstagramPost;
use App\Models\PCompanyLogo;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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

Route::get('/', function () {

    $posts = BlogPost::query()->where('status', 'published')->paginate(6);

    return view('index', compact('posts'));
});

Route::get('/About-Us', function () {

    $teams = Team::all();
    return view('AboutUs', compact('teams'));
})->name('About-Us');

Route::get('/Contact-Us', function () {
    return view('ContactUs');
})->name('Contact-Us');

Route::get('/hotsports', function () {

    $projects = HotsportsProjects::latest()->get();
    $testimonials = Testimonial::latest()->get();
    $companies = CompanyLogo::latest()->get();
    return view('hotsports', compact(['testimonials', 'companies','projects']));
})->name('hotsports');


Route::get('/Hsmedia', function () {
    $projects = Project::all();
    return view('Hsmedia', compact('projects'));
})->name('Hsmedia');


Route::get('/Our-Companies', function () {
    return view('OurCompanies');
})->name('Our-Companies');


Route::get('/Primedia', function () {
    $pcompanies = PCompanyLogo::latest()->get();
    return view('Primedia', compact('pcompanies'));
})->name('Primedia');


Route::get('/studio1', function () {
    return view('studio1');
});
Route::get('/studio2', function () {
    return view('studio2');
});
Route::get('/studio3', function () {
    return view('studio3');
});
Route::get('/studio5', function () {
    return view('studio4');
});
Route::get('/studio5', function () {
    return view('studio4');
});
Route::get('/studios', function () {
    return view('studios');
});

















/* 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/blog-list', [BlogPostController::class, 'index'])->name('blog-list');
    Route::get('/blogs-create', [BlogPostController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogPostController::class, 'store'])->name('blog-posts.store');
    Route::get('/blog-edit/{id}', [BlogPostController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogPostController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogPostController::class, 'destroy'])->name('blogs.destroy');

    Route::resource('categories', CategoryController::class);
    Route::resource('companies', CompanyLogoController::class);
    Route::resource('pcompanies', PCompanyLogoController::class);

    Route::resource('projects', ProjectController::class);
    Route::resource('hprojects', HotsportsProjectsController::class);

    Route::resource('team', TeamController::class);

    Route::resource('testimonials', TestimonialController::class);



    Route::delete('categories', [CategoryController::class, 'massDestroy'])->name('categories.massDestroy');

    
});

require __DIR__ . '/auth.php';

Route::get('/media', function () {
    return view('Media/Index');
});

Route::get('/media-edit', function () {
    return view('Media/Edit');
});


Route::get('/blog', function (Request $request) {

    $randomPosts = BlogPost::latest()->get();
    $randomPostImage = $randomPosts->isEmpty() ? null : $randomPosts->random()->image;
    
    $instagramPosts =  InstagramPost::latest()->get();

    $category = $request->query('category', 'all');
    $categories = Category::all();

    $posts = BlogPost::query()->where('status', 'published');

    if ($category !== 'all') {
        $posts->where('category', $category);
    }

    $posts = $posts->paginate(6);

    return view('blog', [
        'posts' => $posts,
        'categories' => $categories,
        'instagramPosts' => $instagramPosts,
        'randomPostImage' => $randomPostImage,

    ]);
})->name('all-blog');


Route::resource('instagram-posts', InstagramPostController::class);

Route::get('/blog-info/{post}', [BlogPostController::class, 'show'])->name('blog-info.show');
