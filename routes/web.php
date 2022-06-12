<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UtilsController;
use App\Http\Controllers\PagesController;
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
Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/about-us', [PagesController::class, 'about'])->name('about-us');

Route::get('/our-services', [PagesController::class, 'services'])->name('our-services');
Route::get('/our-services/{service}', [PagesController::class, 'showService'])->name('our-services.show');


Route::get('/tutorials', [PagesController::class, 'videos'])->name('pages.videos');
Route::get('/tutorials/{title}', [PagesController::class, 'showVideo'])->name('pages.videos.show');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/blog/{title}', [PagesController::class, 'showPost'])->name('blog.show');

Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact-us');

Route::get('/resources', [PagesController::class, 'resources'])->name('resources');

Route::get('/search', [PagesController::class, 'searchPost'])->name('pages.search');

Route::get('/software', [PagesController::class, 'softwares'])->name('pages.softwares');


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
	Route::resource('tags', TagController::class)->only(["store", "update", "destroy"]);

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

