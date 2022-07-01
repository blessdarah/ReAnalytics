<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/logo.png')}}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/logo.png')}}" alt="" height="26">
            </span>
        </a>

        <a href="{{route('home')}}" class="logo logo-light">
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="assets/images/logo-light-sm.png" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{route('home')}}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Features</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-news icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Posts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('posts.create')}}" data-key="t-inbox">Create post</a></li>
                        <li><a href="{{route('posts.index')}}" data-key="t-read-email">Post list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-collection icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('services.create')}}" data-key="t-inbox">Create service</a></li>
                        <li><a href="{{route('services.index')}}" data-key="t-read-email">Services list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-trophy icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('events.create')}}" data-key="t-inbox">Create event</a></li>
                        <li><a href="{{route('events.index')}}" data-key="t-read-email">Event lists</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-task icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('projects.create')}}" data-key="t-inbox">Create project</a></li>
                        <li><a href="{{route('projects.index')}}" data-key="t-read-email">Project lists</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Manage team</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('members.create')}}" data-key="t-inbox">Add team member</a></li>
                        <li><a href="{{route('members.index')}}" data-key="t-read-email">Team members</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-cool icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Testimonials</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('testimonials.create')}}" data-key="t-inbox">Add testimonial</a></li>
                        <li><a href="{{route('testimonials.index')}}" data-key="t-read-email">Testimonial list</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Tags and categories</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-tag icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">Common</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('categories.index')}}" data-key="t-starter-page">Categories</a></li>
                        <li><a href="{{route('tags.index')}}" data-key="t-maintenance">Tags</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Settings</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-wheel icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">Site settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('contacts.index')}}" data-key="t-starter-page">Contact links</a></li>
                        <li><a href="#" data-key="t-maintenance">Contact messages</a></li>
                    </ul>
                </li>

                {{-- <a href="{{ route('attachments.index') }}"
                class="{{ Config::get('app.page') === 'attachments' ? 'active' : '' }} list-group-item list-group-item-action border-0 rounded mb-2">
                <i class="bx bx-file bx-sm"></i> Files & documents
                </a> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
