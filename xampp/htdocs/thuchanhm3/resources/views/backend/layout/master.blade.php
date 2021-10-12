<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('master/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('master/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('master/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('master/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('master/images/favicon.png')}}"/>
</head>
<body class="error404 woocommerce-no-js lightbox nav-dropdown-has-arrow">
<div class="container-scroller">
    @include('backend.layout.navbar')
    <div class="container-fluid page-body-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>
                Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles primary"></div>
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default light"></div>
            </div>
        </div>
        @include('backend.layout.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('backend.layout.footer')
        </div>
    </div>
</div>
<script src="{{asset('master/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('master/vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{asset('master/js/off-canvas.js')}}"></script>
<script src="{{asset('master/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('master/js/misc.js')}}"></script>
<script src="{{asset('master/js/settings.js')}}"></script>
<script src="{{asset('master/js/todolist.js')}}"></script>
<script src="{{asset('master/js/dashboard.js')}}"></script>
</body>
</html>
