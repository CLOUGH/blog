<!--========== HEADER ==========-->
<header class="header navbar-fixed-top header-sticky">
    @include('partials.ark.topbar')
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

                    <!-- Search -->
                    <div class="navbar-actions-shrink search">
                        <div class="search-btn">
                            <i class="search-btn-default fa fa-search"></i>
                            <i class="search-btn-active fa fa-times"></i>
                        </div>
                    </div>
                    <!-- End Search -->
                </div>
                <!-- End Navbar Actions -->

                <!-- Logo -->
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap" href="index.html">
                        <img class="navbar-logo-img navbar-logo-img-dark" src="{{ url('assets/img/logo-default.png') }}" alt="">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        @include('partials.navbar-links')
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
        <!--// End Container-->
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->

