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
                            src="/img/laravel.png" 
                            alt="logo" 
                            style="width: 40px;" 
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
                <!-- User -->
                @auth
                <li class="nav-item dropdown">
                    <a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                        <img src="/img/Sunrise.SUPLIN.png" alt="..." class="avatar rounded-circle">
                    </a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                            <a href="#" class="edit-profile">
                                <i class="la la-gear"></i>
                            </a>
                            <img src="/img/Sunrise.SUPLIN.png" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a 
                                rel="nofollow"
                                href="{{ route('logout') }}"
                                class="dropdown-item logout text-center"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                <i class="ti-power-off"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
                <!-- End User -->
            </ul>
            <!-- End Navbar Menu -->

        </div>
        <!-- End Topbar -->
    </nav>
</header>