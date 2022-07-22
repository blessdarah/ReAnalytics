<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Member;
use App\Models\Post;
use App\Models\PresidentsMessage;
use App\Models\Project;
use App\Models\Service;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->tags = Tag::orderBy('name')->get();
        $this->categories = Category::orderBy('name')->get();
    }

    public function welcome()
    {
        $services = Service::latest()->take(5)->get();
        $events = Event::latest()->take(5)->get();
        return view('welcome')
            ->with('events', $events)
            ->with('services', $services);
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function send_contact_message(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'required|email',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);

        $contact_message = ContactMessage::create($data);
        $users = User::all();

        Notification::send($users, new ContactFormNotification($contact_message));
        return redirect()->route('app.contact-us')->with('toast', 'message send successfully');
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

    public function showEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('frontend.events.show')->with('event', $event);
    }

    public function members()
    {
        $members = Member::all();
        return view('frontend.members.index')->with('members', $members);
    }

    public function showMember($id)
    {
        $member = Member::find($id);
        return view('frontend.members.show')->with('member', $member);
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('frontend.projects.index')->with('projects', $projects);
    }

    public function showProject(string $url)
    {
        $id = Str::before($url, '-');
        $project = Project::findOrFail($id);
        return view('frontend.projects.show')->with('project', $project);
    }

    public function presidentsMessage()
    {
        $message = PresidentsMessage::where('author', 'president')->first();
        return view('frontend.other-pages.presidents-message')->with('message', $message);
    }


    public function rectorsMessage()
    {
        $message = PresidentsMessage::where('author', 'rector')->first();
        return view('frontend.other-pages.presidents-message')->with('message', $message);
    }

    public function organigram()
    {
        return view('frontend.other-pages.orgnigram');
    }
}
