<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->tags = Tag::orderBy('name')->get();
        $this->categories = Category::orderBy('name')->get();
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function services()
    {
        $services = Service::latest()->get();
        $questions = Faq::latest()->take(5)->get();
        return view('frontend.services.index')
            ->with('faqs', $questions)
            ->with('services', $services);
    }

    public function showService($url)
    {
        $id = Str::before($url, '-');
        $service = Service::findOrFail($id);
        return view('frontend.services.show')->with('service', $service);
    }

    public function blog()
    {
        $posts = Post::latest()->get();
        $recentPosts = Post::inRandomOrder()->take(3)->get();
        return view('frontend.blog.index')
            ->with('posts', $posts)
            ->with('tags', $this->tags)
            ->with('recentPosts', $recentPosts)
            ->with('categories', $this->categories);
    }

    public function showBlog(string $url)
    {

        $id = Str::before($url, '-');
        $post = Post::findOrFail($id);
        $recentPosts = Post::inRandomOrder()->take(3)->get();
        return view('frontend.blog.show')
            ->with('recentPosts', $recentPosts)
            ->with('categories', $this->categories)
            ->with('tags', $this->tags)
            ->with('post', $post);
    }

    public function events()
    {
        return view('frontend.events.index');
    }

    public function showEvent()
    {
        return view('frontend.events.show');
    }
}
