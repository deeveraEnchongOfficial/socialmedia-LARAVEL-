<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="index.html" title=""><img src="{{asset('images/logo.png')}}" alt=""></a>
            </div>
            <!--logo end-->
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <!--search-bar end-->
            <nav>
                <ul>
                    <li>
                        <a href="{{route('home')}}" title="">
                            <span><img src="{{asset('images/icon1.png')}}" alt=""></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="companies.html" title="">
                            <span><img src="{{asset('images/icon2.png')}}" alt=""></span>
                            Companies
                        </a>
                        <ul>
                            <li><a href="companies.html" title="">Companies</a></li>
                            <li><a href="company-profile.html" title="">Company Profile</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="projects.html" title="">
                            <span><img src="{{asset('images/icon3.png')}}" alt=""></span>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile.index')}}" title="">
                            <span><img src="{{asset('images/icon4.png')}}" alt=""></span>
                            Profiles
                        </a>
                    </li>
                    <li>
                        <a href="jobs.html" title="">
                            <span><img src="{{asset('images/icon5.png')}}" alt=""></span>
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{asset('images/icon6.png')}}" alt=""></span>
                            Messages
                        </a>
                        <div class="notification-box msg">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a></h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="view-all-nots">
                                    <a href="messages.html" title="">View All Messsages</a>
                                </div>
                            </div>
                            <!--nott-list end-->
                        </div>
                        <!--notification-box end-->
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{asset('images/icon7.png')}}" alt=""></span>
                            Notification
                        </a>
                        <div class="notification-box">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="view-all-nots">
                                    <a href="#" title="">View All Notification</a>
                                </div>
                            </div>
                            <!--nott-list end-->
                        </div>
                        <!--notification-box end-->
                    </li>
                </ul>
            </nav>
            <!--nav end-->
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <!--menu-btn end-->
            <div class="user-account">
                <div class="user-info">
                    {{-- <img src="http://via.placeholder.com/30x30" alt=""> --}}
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss">
                    <h3>Setting</h3>
                    <ul class="us-links">
                        <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                        <li><a href="#" title="">Privacy</a></li>
                        <li><a href="#" title="">Faqs</a></li>
                        <li><a href="#" title="">Terms & Conditions</a></li>
                    </ul>
                    <h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a></h3>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!--user-account-settingss end-->

            </div>
        </div>
        <!--header-data end-->
    </div>
</header>
<!--header end-->