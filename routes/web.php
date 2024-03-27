<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserPortfolioController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\testimonialController;
use App\Http\Controllers\usertestimonialController;

use App\Models\Servise;
use App\Models\UserService;
use App\Models\Portfolio;
use App\Models\UserPortfolio;
use App\Models\Testimonial;
use App\Models\UserTestimonial;

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
    return view('welcome');
});


Route::resource('/admin/service', ServicesController::class);
Route::resource('/services', UserServiceController::class);
Route::resource('/admin/portfolio', PortfolioController::class);
Route::resource('/portfolios', UserPortfolioController::class);
Route::resource('/admin/testimonial', testimonialController::class);
Route::resource('/testimonials', usertestimonialController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [adminController::class, 'edit'])->name('admin.edit');
    Route::patch('/admin/profile', [adminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/profile', [adminController::class, 'destroy'])->name('admin.destroy');
});

require __DIR__.'/adminauth.php';

// admin Route 

Route::get('/admin/add' , function() 
{
    return view('admin.admin');
});

Route::controller(PostController::class)->group(function(){
    Route::get('/admin/post','create');
    Route::post('/admin/post','store')->name('img.store');
    Route::get('/view','show')->name('blog.show');
});


Route::get('/', function () {
    return view('user.index');
});
Route::get('/contect', function () {
    return view('user.contact');
});


Route::get('/portfolioDetail', function () {
    return view('user.portfolio-details');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/aboutme', function () {
    return view('user.about-me');
});


Route::get('/blog', function () {
    return view('user.blog');
});
Route::get('/blogdetail', function () {
    return view('user.blog-details');
});


Route::get('/job', function () {
    return view('user.job');
});
Route::get('/jobdetail', function () {
    return view('user.job-details');
});


Route::get('/product', function () {
    return view('user.product');
});
Route::get('/productdetail', function () {
    return view('user.product-details');
});


Route::get('/404', function () {
    return view('user.404');
});

Route::get('/registration', function () {
    return view('user.registration');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/faq', function () {
    return view('user.faq');
});

Route::get('/price', function () {
    return view('user.price');
});
Route::get('/testimonial', function () {
    return view('user.testimonial');
});

