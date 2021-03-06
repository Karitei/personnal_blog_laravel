<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/dist/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/dist/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/styles.css') }}">
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">

    @include('includes.admin.headerNavigation')

    <div class="main-container">
       @include('includes.admin.sidebarNavigation')
       @yield('content')
    </div>

</div>
<script src="{{ asset('admin/assets/dist/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/dist/vendor/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/dist/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/dist/vendor/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/dist/js/carbon.js') }}"></script>
<script src="{{ asset('admin/assets/dist/js/demo.js') }}"></script>
</body>
</html>
