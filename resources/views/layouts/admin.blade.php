<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('page-title')</title>

    <link href="{{ url('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/all.css') }}" rel="stylesheet">
    @yield('header')
</head>

<body class="page @yield('page-class')">
    <div id="wrapper">
        @include('partials.admin.sidenav')
        <div id="page-wrapper" class="gray-bg">
            @include('partials.admin.top-navbar')
            @yield('content')
            @include('partials.admin.footer')
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ url('admin-assets/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ url('admin-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ url('admin-assets/js/inspinia.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/iCheck/icheck.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ url('admin-assets/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ url('admin-assets/js/plugins/cropper/cropper.min.js') }}"></script>

    <script src="{{ url('js/all.js') }}"></script>
    <script src="{{ url('js/admin/scripts.js')}}"></script>
    @yield('scripts')
</body>
</html>
