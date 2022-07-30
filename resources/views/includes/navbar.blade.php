<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
    <div class="header__right d-flex justify-content-end align-items-center">
       <div class="main-menu">
          <nav id="mobile-menu">
             {{-- <ul class="d-inline-flex ml-auto my-0">
                <li><a href="#">facebook</a></li>
                <li><a href="#">twitter</a></li>
             </ul> --}}
             <ul>
                <li>
                   <a href="{{ route('welcome') }}">Home</a>
                </li>

                {{-- about us --}}
                <li class="has-dropdown">
                  <a href="javascript:void(0);">About GHIB</a>
                  <ul class="submenu">
                     <li class="has-dropdown">
                       <a href="javascript:void(0);">Governance</a>
                       <ul class="submenu">
                          <li><a href="{{ route('app.about-us.presidents-message') }}">President's Message</a></li>
                          <li><a href="{{ route('app.about-us.rectors-message') }}">Rector's message</a></li>
                          <li><a href="{{route('app.about-us.team')}}">Profile of Board members</a></li>
                          <li><a href="{{route('app.about-us.team')}}">GHIB Organigram</a></li>
                       </ul>
                     </li>
                     <li><a href="{{route('app.about-us.team')}}">Photo gallery</a></li>
                     <li><a href="{{route('app.about-us.team')}}">Testimonials</a></li>
                  </ul>
               </li>

                <li>
                    <a href="{{ route('app.services') }}">Programs</a>
                 </li>

                <li>
                   <a href="{{ route('app.projects') }}">Admission</a>
                </li>
               
                <li>
                   <a href="{{ route('app.blog') }}">E-Learning</a>
                </li>
                
                <li>
                   <a href="{{ route('app.blog') }}">Campus life</a>
                </li>
                {{-- <li><a href="{{ route('app.contact-us') }}">Contact</a></li> --}}
             </ul>
          </nav>
       </div>
       <div class="header__btn ml-20 d-none d-sm-block">
          <a href="{{route('login')}}" class="e-btn">Admin login</a>
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
