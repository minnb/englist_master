    <?php $about = App\Models\Pages::where('name','about')->get(); ?>
 <!--================= Header Section Start Here =================-->
 <header id="react-header" class="react-header">
     <div class="topbar-area style1">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7">
                     <div class="topbar-contact">
                         <ul>
                             <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-phone">
                                     <path
                                         d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                     </path>
                                 </svg>
                                 <a href="tel:(+1)3344999999"> {{$about[0]->c6}}</a>
                             </li>
                             <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                     <path
                                         d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                     </path>
                                     <polyline points="22,6 12,13 2,6"></polyline>
                                 </svg>
                                 <a href="mailto:info@reactheme.com">{{$about[0]->c5}}</a>
                             </li>

                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-5 text-right">
                     <div class="toolbar-sl-share">
                         <ul class="social-links">
                             <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_facebook"></span></a></li>
                             <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_twitter"></span></a></li>
                             <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="menu-part">
         <div class="container">
             <!--================= Menu Start Here =================-->
             <div class="react-main-menu">
                 <nav>
                     <!--================= Menu Toggle btn =================-->
                     <div class="menu-toggle">
                         <div class="logo"><a href="{{ url('/') }}" class="logo-text"> <img
                                     src="{{ URL::asset('build/images/logo.png') }}" alt="logo"> </a></div>
                         <button type="button" id="menu-btn">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     </div>
                     <!--================= Menu Structure =================-->
                     <div class="react-inner-menus">
                         <ul id="backmenu" class="react-menus home react-sub-shadow">
                            <?php
                                $currentRouteName = Route::currentRouteName();
                            ?>
                           @if (Route::currentRouteName() === '')
                             <li> <a href="javascript:void(0);">Home</a></li>
                            @else
                                <li> <a href="{{ url('/') }}">Home</a></li>
                            @endif
                             <li> <a href="{{ url('about') }}">About</a></li>
                             <li> <a href="{{ url('coureses') }}">Courses</a>
                                 <ul>
                                     <li><a href="{{ url('coureses') }}">English Class</a></li>
                                     <li><a href="{{ url('coureses') }}">One-on-One</a></li>
                                 </ul>
                             </li>
                             <li> <a href="{{ url('blog') }}">Blog</a></li>
                             <li> <a href="{{ url('contact') }}">Contact</a></li>
                             @if (Auth::check())
                                 <li>
                                     <a href="javascript:void(0);">{{ Auth::user()->name }}</a>
                                     <ul>
                                         <li><a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                         </li>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                             class="d-none">
                                             @csrf
                                         </form>
                                     </ul>
                                 </li>
                             @endif
                         </ul>
                         <div class="searchbar-part">
                             <div class="react-login">
                                 @guest
                                     <a href="{{ url('login') }}">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                             <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                             <circle cx="12" cy="7" r="4"></circle>
                                         </svg>Log In</a>
                                 @endguest
                             </div>
                             <form class="search-form">
                                 <input type="text" class="form-input" placeholder="Search Course">
                                 <button type="submit" class="form-button">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-search">
                                         <circle cx="11" cy="11" r="8"></circle>
                                         <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                     </svg>
                                 </button>
                             </form>
                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </header>
