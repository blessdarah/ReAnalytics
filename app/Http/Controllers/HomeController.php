<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except("contact");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->withTags(Tag::all())
            ->withPosts(Post::all())
            ->withServices(Service::all());
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        ContactMessage::create($data);
        return redirect()->back()->withToastSuccess('Your message has been sent successfully');
    }


    public function contactMessages()
    {
        Config::set('app.page', 'settings');
        return view('contact-messages.index')->withContactMessages(ContactMessage::latest()->get());
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function notifications()
    {
        return view('notifications.index');
    }


}
