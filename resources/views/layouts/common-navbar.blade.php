<!--================= Header Section Start Here =================-->
<header id="react-header" class="react-header react-header-three">
    <div class="menu-part">
        <div class="container">
            <!--================= Menu Start Here =================-->
            <div class="react-main-menu">
                <nav>
                    <!--================= Menu Toggle btn =================-->
                    <div class="menu-toggle">
                        <div class="logo"><a href="{{ url('index') }}" class="logo-text"> <img
                                    src="{{ URL::asset('build/images/logo2.png') }}" alt="logo"> </a></div>
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--================= Menu Structure =================-->
                    <div class="react-inner-menus">
                        <div class="cate-part">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                            <ul class="react-category-menu">
                                <li><a href="javascript:void(0);">Categories <i class="arrow_carrot-down"></i></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">English Book</a></li>
                                        <li><a href="javascript:void(0);">Math Book</a></li>
                                        <li><a href="javascript:void(0);">Story Book</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <ul id="backmenu" class="react-menus react-sub-shadow">
                            <li> <a href="javascript:void(0);">Home</a>
                                <ul>
                                    <li> <a href="{{ url('index') }}">Home One</a></li>
                                    <li> <a href="{{ url('index-two') }}">Home Two</a></li>
                                    <li> <a href="{{ url('index-three') }}">Home Three</a></li>
                                    <li> <a href="{{ url('index-four') }}">Home Four</a></li>
                                    <li> <a href="{{ url('index-five') }}">Home Five</a></li>
                                    <li> <a href="{{ url('index-six') }}">Home Six</a></li>
                                    <li> <a href="{{ url('index-seven') }}">Home Seven</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);">Pages</a>
                                <ul>
                                    <li> <a href="{{ url('about') }}">About</a></li>
                                    <li> <a href="{{ url('instructors') }}">Instructor</a></li>
                                    <li> <a href="{{ url('profile') }}">Profile</a></li>
                                    <li> <a href="{{ url('events') }}">Events</a>
                                        <ul>
                                            <li><a href="{{ url('events') }}">Events</a></li>
                                            <li><a href="{{ url('events-right-sidebar') }}">Events Sidebar</a></li>
                                            <li><a href="{{ url('events-single') }}">Events Single</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="{{ url('login') }}">Login</a></li>
                                    <li> <a href="{{ url('signup') }}">Sign Up</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url('coureses-grid') }}">Courses</a>
                                <ul>
                                    <li><a href="{{ url('coureses-grid') }}">Courses</a></li>
                                    <li><a href="{{ url('coureses-right-sidebar') }}">Right Sidebar</a></li>
                                    <li><a href="{{ url('coureses-list') }}">Courses List</a></li>
                                    <li><a href="{{ url('coureses-single') }}">Courses Single</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url('blog') }}">Blog</a>
                                <ul>
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li><a href="{{ url('blog-details') }}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url('contact') }}">Contact</a></li>
                            @if (Auth::check())
                                <li>
                                    <a href="javascript:void(0);">{{ Auth::user()->name }}</a>
                                    <ul>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                        <div class="searchbar-part">
                            <form class="search-form">
                                <input type="text" class="form-input" placeholder="Search Course">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65">
                                        </line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!--=================  Back Menu End Here  =================-->
        </div>
    </div>
</header>
<!--================= Header Section End Here =================-->
