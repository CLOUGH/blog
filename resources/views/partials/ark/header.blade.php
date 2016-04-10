<!--========== HEADER TRANSPARENT ==========-->
<header class="header-transparent header-transparent-bb navbar-fixed-top header-sticky">
    <!-- Navbar -->
    <nav class="navbar mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Navbar Actions -->
                <div class="navbar-actions">

                    <!-- Search Fullscreen -->
                    <div class="navbar-actions-shrink search-fullscreen search-fullscreen-trigger-white">
                        <div class="search-fullscreen-trigger">
                            <i class="search-fullscreen-trigger-icon fa fa-search"></i>
                        </div>
                        <div class="search-fullscreen-overlay">
                            <div class="search-fullscreen-overlay-content">
                                <div class="search-fullscreen-input-group">
                                    <input type="text" class="form-control search-fullscreen-input" placeholder="Search for ...">
                                    <button class="search-fullscreen-search" type="button"><i class="search-fullscreen-search-icon fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="search-fullscreen-bg-overlay">
                            <div class="search-fullscreen-close">&times;</div>
                        </div>
                    </div>
                    <!-- End Search Fullscreen -->
                </div>
                <!-- End Navbar Actions -->

                <!-- Logo -->
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap" href="index.html">
                        <img class="navbar-logo-img navbar-logo-img-white" src="assets/img/logo-default-white.png" alt="Ark">
                        <img class="navbar-logo-img navbar-logo-img-dark" src="assets/img/logo-default.png" alt="Ark">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="nav-ite">
                            <a class="nav-item-child radius-3 {{ Request::is('/') ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
                        </li>
                        <!-- End Home -->

                        <!-- Blog -->
                        <li class="nav-item">
                            <a class="nav-item-child radius-3 {{ Request::is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <!-- End Blog -->

                        <!-- Portfolio -->
                        <li class="nav-item">
                            <a class="nav-item-child radius-3 {{ Request::is('portfolio') ? 'active' : '' }}" href="{{ url('/about') }}">Portfolio</a>
                        </li>
                        <!-- End Portfolio -->

                        <!-- About Me -->
                        <li class="nav-item">
                            <a class="nav-item-child radius-3 {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Me</a>
                        </li>
                        <!-- End About Me -->
                        <!-- Hire Me -->
                        <li class="nav-item">
                            <a class="nav-item-child radius-3 {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Hire Me</a>
                        </li>
                        <!-- End Hire Me -->
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
        <!--// End Container-->
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER TRANSPARENT ==========-->