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
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,500,300,300italic&" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic&" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">

    <script src="js/header.js"></script>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- END FAVICON -->
</head>
<!-- END HEAD -->
<!-- BODY -->
<body class="@yield('body-class')">
    <!--========== WRAPPER ==========-->
    <div class="wrapper animsition">
        @yield('promo-block')
        @yield('content')        
        @include('layouts.default-footer')
    </div>
    <!--========== END WRAPPER ==========-->
    <!--========== JAVASCRIPT (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!--[if lt IE 9]>
    <script src="js/ie9.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/components/header-sticky.js"></script>
    <script type="text/javascript" src="js/components/scrollbar.js"></script>
    <script type="text/javascript" src="js/components/form-modal.js"></script>
    <script type="text/javascript" src="js/components/wow.js"></script>
    <script type="text/javascript" src="js/components/animsition.js"></script>
    <script type="text/javascript" src="js/components/magnific-popup.js"></script>
    @yield('scripts')
    <!--========== END JAVASCRIPT ==========-->
</body>
</html>
