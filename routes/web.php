<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PresidentsMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteInfoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    Route::get('/our-services/{name}', 'showService')->name('app.services.show');

    Route::get('/upcoming-events', 'events')->name('app.events');
    Route::get('/upcoming-events/{id}', 'showEvent')->name('app.events.show');

    Route::get('/blog', 'blog')->name('app.blog');
    Route::get('/blog/{title}', 'showBlog')->name('app.blog.show');

    Route::get('/about-us/board-members', 'members')->name('app.about-us.team');
    Route::get('/about-us/board-members/{id}', 'showMember')->name('app.about-us.team.show');
    Route::get('/about-us/presidents-message', 'presidentsMessage')->name('app.about-us.presidents-message');
    Route::get('/about-us/rectors-message', 'rectorsMessage')->name('app.about-us.rectors-message');
    Route::get('/about-us/organigram', 'organigram')->name('app.about-us.organigram');

    Route::get('/contact-us', 'contact')->name('app.contact-us');
    Route::post('/contact-us', 'send_contact_message')->name('app.contact-us.send');

    Route::get('/our-projects', 'projects')->name('app.projects');
    Route::get('/our-projects/{title}', 'showProject')->name('app.projects.show');

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
Route::post('/contact-submit', [HomeController::class, 'contact'])
        ->name('contact.submit');

Route::group(
    ['middleware' => ['auth'] ], 
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

        Route::get('/contact-messages', [HomeController::class, 'contactMessages'])
                ->name('contact.messages');
        Route::get('/notifications', [HomeController::class, 'notifications'])
                ->name('notifications');
        Route::get('/organigram', [HomeController::class, 'organigram'])
                ->name('organigram');

        Route::resource('posts', PostController::class);
        Route::resource('events', EventController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('members', MemberController::class);
        Route::resource('attachments', AttachmentController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('organizations', OrganizationController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('tags', TagController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('messages', PresidentsMessageController::class);
        Route::resource('site-info', SiteInfoController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('invoices', InvoiceController::class);
    }
);

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
// Route::fallback(function () {
//     return view('404')->name('404');
// });
