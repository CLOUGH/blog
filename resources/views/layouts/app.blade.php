<!DOCTYPE html>
<html lang="en"  class="no-js">
<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page-title')</title>
    <meta name="keywords" content="Warren Clough, Warren Clough Website, Warren Clough Blog, Warren Clough Portfolio" />
    <meta name="description" content="Warren Clough's portfolio website and blog">
    <meta name="author" content="Warren Clough">

     <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,700,500,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="{{ url('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/et-line/et-line.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME PLUGINS STYLE -->
    <link href="{{ url('/assets/plugins/scrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END THEME PLUGINS STYLE -->
 
    <!-- THEME STYLES -->
    <link href="{{ url('/assets/css/global.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->


    <!-- THEME -->
    <link href="{{ url('/assets/css/theme/dark.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('/assets/css/theme/base.css') }}" rel="stylesheet" type="text/css" id="style-color"/>
    <!-- END THEME -->

    <!-- BEGIN JQUERY -->
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.min.js') }}"></script>
    <!-- END JQUERY -->

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <!-- END FAVICON -->

    <!-- MY STYLES -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END STYLES -->
    @yield('header')
</head>
<!-- END HEAD -->
<!-- BODY -->
<body class="page @yield('page-class')">
    <!-- WRAPPER -->
    <div class="wrapper animsition @yield('wrapper-class')">
        @yield('page-header')
        @yield('content')
        @yield('page-footer')
    </div>
    <!-- END WRAPPER -->
    
    <!-- Sidebar Content Overlay -->
    <div class="sidebar-content-overlay"></div>
    <!-- End Sidebar Content Overlay -->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top-theme"></a>
    <!-- End Back To Top -->

    <!--========== JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="{{ url('/assets/plugins/html5shiv.js') }}"></script>
    <script src="{{ url('/assets/plugins/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- END CORE PLUGINS -->

    <!-- PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.animsition.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.equal-height.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/plugins/jquery.appear.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="{{ url('/assets/scripts/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/animsition.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/form-modal.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/wow.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/equal-height.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/progress-bar.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--========== END JAVASCRIPTS ==========-->
    @yield('scripts')
</body>
</html>
