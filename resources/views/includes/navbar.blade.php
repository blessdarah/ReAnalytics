<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
    <div class="header__right d-flex justify-content-end align-items-center">
       <div class="main-menu">
          <nav id="mobile-menu">
             <ul>
                <li>
                   <a href="{{ route('welcome') }}">Home</a>
                </li>
                {{-- <li class="has-dropdown">
                   <a href="course-grid.html">Courses</a>
                   <ul class="submenu">
                      <li><a href="course-grid.html">Courses</a></li>
                      <li><a href="course-list.html">Course List</a></li>
                      <li><a href="course-sidebar.html">Course sidebar</a></li>
                      <li><a href="course-details.html">Course Details</a></li>
                   </ul>
                </li> --}}

                <li>
                    <a href="{{ route('app.services') }}">Services</a>
                 </li>

                <li>
                   <a href="{{ route('app.blog') }}">Events</a>
                </li>
               
                <li>
                   <a href="{{ route('app.blog') }}">Blog</a>
                </li>
              
                <li class="has-dropdown">
                   <a href="javascript:void(0);">About us</a>
                   <ul class="submenu">
                      <li><a href="{{ route('app.about') }}">Our mission</a></li>
                      <li><a href="instructor.html">Team</a></li>
                   </ul>
                </li>
                <li><a href="{{ route('app.contact-us') }}">Contact</a></li>
             </ul>
          </nav>
       </div>
       <div class="header__search p-relative ml-50 d-none d-md-block">
          <form action="#">
             <input type="text" placeholder="Search...">
             <button type="submit"><i class="fad fa-search"></i></button>
          </form>
       </div>
       <div class="header__btn ml-20 d-none d-sm-block">
          <a href="{{ route('app.contact-us') }}" class="e-btn">Contact</a>
       </div>
       <div class="sidebar__menu d-xl-none">
          <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
          </div>
      </div>
    </div>
 </div>