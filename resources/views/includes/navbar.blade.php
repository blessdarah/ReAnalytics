 <header class="header header-home-one">
     <nav class="navbar navbar-default header-navigation stricky">
         <div class="thm-container clearfix">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed bitmex-icon-menu" data-toggle="collapse"
                     data-target=".main-navigation" aria-expanded="false"> </button>
                 <a class="navbar-brand" href="{{ route('welcome') }}">
                     <img src="img/logo.png" alt="Awesome Image" />
                 </a>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                 <ul class="nav navbar-nav navigation-box">
                     <li class="{{ Config::get('app.page') == 'welcome' ? 'current' : '' }}">
                         <a href="{{ route('welcome') }}">Home</a>
                     </li>
                     <li class="{{ Config::get('app.page') == 'about' ? 'current' : '' }}"> <a
                             href="{{ route('about-us') }}">About</a></li>
                     <li class="{{ Config::get('app.page') == 'services' ? 'current' : '' }}">
                         <a href="{{ route('our-services') }}">Services</a>
                     </li>

                     <li>
                         <a href="{{ route('pages.videos') }}"
                             class="{{ Config::get('app.page') == 'videos' ? 'current' : '' }}">Videos</a>
                     </li>

                     <li class="{{ Config::get('app.page') == 'blog' ? 'current' : '' }}"><a
                             href="{{ route('blog') }}">Blog</a>
                     </li>
                     <li class="{{ Config::get('app.page') == 'contact' ? 'current' : '' }}"> <a
                             href="{{ route('contact-us') }}">Contact</a> </li>
                 </ul>
             </div><!-- /.navbar-collapse -->
             <div class="right-side-box">
                 {{-- <a href="#test-search"
                     class="search-icon popup-with-zoom-anim bitmex-icon-search"></a> --}}
                 <a href="#hidden-sidebar" class="side-menu-icon bitmex-icon-menu side-nav-opener">
                 </a>
             </div><!-- /.right-side-box -->
         </div><!-- /.container -->
     </nav>
 </header><!-- /.header -->
