<aside class="bg-white shadow-sm px-4 sticky-top">
    <nav>
        <ul class="list-group mt-4 text-primary">
            <a href="{{ route('home') }}"
                class="list-group-item border-0 mb-4 h2 font-weight-bold rounded text-center text-uppercase text-dark">
				ReAnalytics
            </a>
            <a href="{{ route('home') }}"
                class="{{ Config::get('app.page') === '/' ? 'active' : '' }} list-group-item list-group-item-action border-0 mb-2 rounded">
                <i class="bx bxs-dashboard"></i> Dashboard
            </a>
             <a href="{{ route('posts.index') }}"
                class="{{ Config::get('app.page') === 'posts' ? 'active' : '' }} list-group-item list-group-item-action border-0 mb-2 rounded">
                <i class="bx bx-news"></i> Posts
            </a>
            {{-- <a href="{{route('events.index')}}" --}}
            {{--     class="{{ Config::get('app.page') === 'events' ? 'active' : '' }} list-group-item list-group-item-action border-0 mb-2 rounded"> --}}
            {{--     <i class="bx bx-slider bx-sm"></i> Events --}}
            {{-- </a> --}}
            <a href="{{ route('projects.index') }}"
                class="{{ Config::get('app.page') === 'projects' ? 'active' : '' }} list-group-item list-group-item-action border-0 mb-2 rounded">
                <i class="bx bx-slider bx-sm"></i> Projects
            </a> 
            <a href="{{ route('services.index') }}"
                class="{{ Config::get('app.page') === 'services' ? 'active' : '' }} list-group-item list-group-item-action border-0 mb-2 rounded">
                <i class="bx bx-expand"></i> Services
            </a>
            <a href="{{ route('members.index') }}"
                class="{{ Config::get('app.page') === 'experts' ? 'active' : '' }} list-group-item list-group-item-action border-0 rounded mb-2">
                <i class="bx bx-slider bx-sm"></i> Team
            </a>
            <a href="{{ route('testimonials.index') }}"
                class="{{ Config::get('app.page') === 'testimonial' ? 'active' : '' }} list-group-item list-group-item-action border-0 rounded mb-2">
                <i class='bx bxs-quote-right'></i> Testimonials
            </a>
            {{-- <a href="{{ route('attachments.index') }}"
                class="{{ Config::get('app.page') === 'attachments' ? 'active' : '' }} list-group-item list-group-item-action border-0 rounded mb-2">
                <i class="bx bx-file bx-sm"></i> Files & documents
            </a> --}}
            <li
                class="{{ Config::get('app.page') === 'settings' ? 'active' : '' }} list-group-item list-group-item-action border-0 rounded mb-2 dropdown open">

                <button class="btn btn-link btn-block text-left text-secondary text-decoration-none" type="button"
                    data-toggle="collapse" data-target="#settings" aria-expanded="false" aria-controls="settings">
                    <i class="bx bxs-widget"></i> Settings
                </button>
                <div class="collapse" id="settings">
                    <ul class="list-group mt-3">
                        <a href="{{ route('contacts.index') }}"
                            class="list-group-item list-group-item-action rounded border-0 bg-light mb-2">
                            <i class="bx bx-link"></i> Contact links
                        </a>
                        <a href="{{ route('contact.messages') }}"
                            class="list-group-item list-group-item-action rounded border-0 bg-light mb-2">
                            <i class="bx bx-chat"></i> Contact messages
                        </a>
                        <a href="#" class="list-group-item list-group-item-action rounded border-0 bg-light mb-2"><i
                                class="bx bx-image"></i> Banner</a>
                    </ul>
                </div>
            </li>
            <a href="{{ route('welcome') }}" class="list-group-item list-group-item-action border-0 mb-2 rounded mb-2">
                <i class="bx bx-slider"></i> Visit site
            </a>
        </ul>
        <p class="text-center mt-4">
        <form action="{{ route('logout') }}" method="POST" class="text-center">
            @csrf
            <button class="btn btn-outline-success"><i class="bx bx-log-out-circle"></i>
                Sign Out</button>
        </form>
        </p>
    </nav>
</aside>
