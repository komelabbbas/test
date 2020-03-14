<header class="header">
    <nav class="navbar fixed-top">        
        <!-- Begin Topbar -->
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <!-- Begin Logo -->
            <div class="navbar-header">
                <!-- Toggle Button -->
                <a id="toggle-btn" href="#" class="menu-btn active">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <!-- End Toggle -->
                <a href="{{ route('home') }}" class="navbar-brand ml-4">
                    <div class="brand-image brand-big">
                        <img 
                            src="/img/Plastonspot.png" 
                            alt="logo" 
                            style="width: 250px;" 
                            class="logo-big"
                        >
                    </div>
                    <div class="brand-image brand-small">
                        <img 
                            src="/img/Plastonspot.png" 
                            alt="logo" 
                            class="logo-small" 
                            style="width: 200px;"
                            >
                    </div>
                </a>
            </div>
            <!-- End Logo -->
            <!-- Begin Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <!-- Search -->
                <!-- End Search -->
                <!-- Begin Notifications -->
                {{-- <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu notification">
                        <li>
                            <div class="notifications-header">
                                <div class="title">Notifications (4)</div>
                                <div class="notifications-overlay"></div>
                                <img src="/img/notifications/01.jpg" alt="..." class="img-fluid">
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-user"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        New user registered
                                    </div>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-calendar-check-o"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        New event added
                                    </div>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-history"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        Server rebooted
                                    </div>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-twitter"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        You have 3 new followers
                                    </div>
                                    <span class="date">10 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                        </li>
                    </ul>
                </li> --}}
                <!-- End Notifications -->
                <!-- User -->
                @auth
                <li class="nav-item dropdown">
                    <a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                        <img src="/img/Sunrise.SUPLIN.png" alt="..." class="avatar rounded-circle">
                    </a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                            <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                            <img src="/img/Sunrise.SUPLIN.png" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a rel="nofollow" href="{{ route('user.logout') }}" class="dropdown-item logout text-center">
                                <i class="ti-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item" class="px-3">
                    <a href="{{ route('register') }}" class="px-3" style="width: 120px">
                        <h3> Join Us</h3>
                    </a>
                </li>
                <li class="nav-item" class="px-5">
                    <a 
                        href="{{ route('front.pricing-plan') }}"
                        class="px-3"
                        style="width: 180px"
                    >
                        <h3> Select you Plan</h3>
                    </a>
                </li>
                @endauth
                <!-- End User -->
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>