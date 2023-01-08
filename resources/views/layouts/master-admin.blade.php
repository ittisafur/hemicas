<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    @include ('layouts.meta-content')
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400,300,600,700&subset=all') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_panel/css/vendor.css') }}" rel="stylesheet">
    @yield('onpagecss')
</head>
<body class="page-container-bg-solid page-header-fixed page-footer-fixed page-sidebar-closed-hide-logo">
    @include ('layouts.admin-header')
    <div class="clearfix"> </div>
    <div class="page-container">
        @include ('layouts.admin-sidebar')
        @yield('content')
    </div>
    @include ('layouts.admin-footer')
    <script src="{{ asset('admin_panel/js/jquery2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin_panel/js/bootstrap3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin_panel/js/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin_panel/js/slimscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin_panel/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin_panel/js/layout.js') }}" type="text/javascript"></script>
    @yield('onpagejs')
</body>
</html>
