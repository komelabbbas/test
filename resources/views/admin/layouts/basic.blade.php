<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Sunrise Times Directory
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <!-- CSS Files -->
    <link href="{{ mix('/admin/css/app.css') }}" rel="stylesheet" type="text/css">

    @yield('styles')
</head>

<body id="page-top">
    <!-- Begin Preloader -->
    <div id="preloader">
        <div class="canvas">
            <img 
                src="/img/laravel.png" 
                alt="logo" 
                class="loader-logo"
                style="width: 250px;"
            >
            <div class="spinner"></div>   
        </div>
    </div>
    <!-- End Preloader -->
    <div class="page bg-2 bg-transparent rounded-widget" id="app">
        @include('admin.layouts.partials.header')

        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch" >
            @include('admin.layouts.partials.sidebar')
            <div class="content-inner">
                @yield('content')
                @include('admin.layouts.partials.footer')
            </div>
            <!-- End Content -->
        </div>
        <!-- End Page Content -->
       
    </div>
    <script src="{{ mix('/admin/js/core/plugins.js') }}"></script>
    <script src="{{ mix('/admin/js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>