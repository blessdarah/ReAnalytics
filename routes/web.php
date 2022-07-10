<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UtilsController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ==========================================================
 * Routes common to all users of the site
 * **********************************************************
 */


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome');

    Route::get('/about-us', 'about')->name('app.about');

    Route::get('/our-services', 'services')->name('app.services');

    Route::get('/services/{name}', 'showService')->name('app.services.show');

    Route::get('/upcoming-events', 'events')->name('app.events');
    Route::get('/upcoming-events/{id}', 'showEvent')->name('app.events.show');

    Route::get('/blog', 'blog')->name('app.blog');

    Route::get('/blog/{title}', 'showBlog')->name('app.blog.show');

    Route::get('/about-us/team', 'members')->name('app.about-us.team');

    Route::get('/contact-us', 'contact')->name('app.contact-us');

    Route::get('/resources', 'resources')->name('app.resources');

    Route::get('/search', 'searchPost')->name('app.search');
});


Auth::routes();

/**
 * ==========================================================
 * Routes only accessible my the site administrator
 * Requires Password and username
 * **********************************************************
 */
Route::post('/contact-submit', [HomeController::class, 'contact'])->name('contact.submit');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/contact-messages', [HomeController::class, 'contactMessages'])->name('contact.messages');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

    Route::resource('posts', PostController::class);
    Route::resource('events', EventController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('members', MemberController::class);
    Route::resource('attachments', AttachmentController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('tags', TagController::class);

    Route::resource('categories', CategoryController::class);
});

/**
 * Upload image to server using ckeditor
 * @param string|file|image
 */
Route::post('/upload-image', [UtilsController::class, 'upload'])->name('files.upload');



/*
|--------------------------------------------------------------------------
| Referal system routes
|--------------------------------------------------------------------------
|
| These routes will help to manage the referal system designed for the projects
| This is an entirely new area. 
|
*/

/*
|--------------------------------------------------------------------------
| Fallback route
|--------------------------------------------------------------------------
|
*/
Route::fallback(function () {
    return view('404')->name('404');
});
