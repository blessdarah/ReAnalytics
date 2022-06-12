<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
    public function index() // welcome page
    {
        Config::set('app.page', 'welcome');
        return view('welcome')->with('posts', Post::all()->take(3));
    }
    public function blog()
    {
        Config::set('app.page', 'blog');
        return view('pages.blog')->with('posts', Post::latest()->get());
    }

    public function showPost(string $title)
    {
        $id = Str::before($title, '-');
        $post = Post::find($id);

        if ($post) {
            Config::set('app.page', 'blog');
            $recentPosts = Post::inRandomOrder()->take(4)->get();
            return view('frontend.posts.show')
                ->with('post', $post)
                ->with('recentPosts', $recentPosts);
        }

        // return view('frontend.posts.show');
    }


    public function services()
    {
        Config::set('app.page', 'services');
        return view('pages.services')
            ->with('services', Service::latest()->get())
            ->with('testimonials', Testimonial::all());
    }

    /**
     * @param string service - the service slug
     * @return Service::class
     */
    public function showService(string $service)
    {
        $id = Str::before($service, '-');
        $service = Service::find($id);
        Config::set('app.page', 'services');
        return view('frontend.services.show')->with('service', $service);
    }


    public function about()
    {
        Config::set('app.page', 'about');
        return view('pages.about-us');
    }


    public function videos()
    {
        Config::set('app.page', 'videos');
        return view('pages.videos')->with('videos', Video::latest()->get());
    }

    public function showVideo(string $title)
    {
        Config::set('app.page', 'videos');
        $id = Str::before($title, '-');
        $video = Video::find($id);
        return view('frontend.videos.show')->with('video', $video);
    }


    public function contact()
    {
        Config::set('app.page', 'contact');
        return view('pages.contact');
    }


    public function resources()
    {
        Config::set('app.page', 'resources');
        return view('pages.resources')->with('attachments', Attachment::all());
    }

    public function searchPost(Request $request)
    {
        $key = trim($request->get('search'));

        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.search')
            ->with('posts', $posts)
            ->with('phrase', $key);
    }
}
