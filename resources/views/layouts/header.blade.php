<!--========== HEADER TRANSPARENT ==========-->
<header class="header-transparent header-transparent-bb navbar-fixed-top header-sticky">
    <!-- Search Field -->
    <div class="search-field">
        <div class="container">
            <input type="text" class="form-control search-field-input" placeholder="Search for...">
        </div>
    </div>
    <!-- End Search Field -->

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

                    <!-- Sidebar -->
                    <a class="navbar-actions-shrink sidebar-trigger sidebar-trigger-style-white" href="javascript:void(0);">
                        <span class="sidebar-trigger-icon"></span>
                    </a>
                    <!-- End Sidebar -->
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
                        <li class="nav-item">
                            <a class="nav-item-child radius-3 active" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <!-- End Home -->
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