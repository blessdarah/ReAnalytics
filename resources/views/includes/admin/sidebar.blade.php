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
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('posts.index')}}" data-key="t-ecommerce">Posts</a></li>
                        <li><a href="dashboard-sales.html" data-key="t-sales">Sales</a></li>
                    </ul>
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
                        <i class="bx bx-face icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('events.create')}}" data-key="t-inbox">Create event</a></li>
                        <li><a href="{{route('events.index')}}" data-key="t-read-email">Event lists</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Tags and categories</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">Common</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('categories.index')}}" data-key="t-starter-page">Categories</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">Tags</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
