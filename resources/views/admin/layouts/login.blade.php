<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Laravel Directory</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
 

    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
  
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--  Fonts and icons  -->
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- CSS Files -->
    <link href="{{ mix('/admin/css/app.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')

</head>

<body class="bg-white">

    {{-- @include('front.layouts.partials.header') --}}
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
    @include('notifs.index')
    @yield('content')

    <script src="{{ mix('/admin/js/core/plugins.js') }}"></script>
    <script src="{{ mix('/admin/js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>