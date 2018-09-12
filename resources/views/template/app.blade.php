<!DOCTYPE html>
<html lang="br" dir="ltr">
    <head>
        <link rel="icon" type="image/png" href="images/DB_16х16.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Dashboard Lite</title>
    
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
    
    
        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    
    
        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">
    
        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel="canonical" href="http://www.example.com/">
        -->
    
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
              type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('css/lib/getmdl-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/lib/nv.d3.css') }}">
        <link rel="stylesheet" href="{{ asset('css/application.css') }}">
        <!-- endinject -->
    
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">

            @include('template.header')
            @include('template.nav')
            <main class="mdl-layout__content">
        
                <div class="mdl-grid mdl-grid--no-spacing">
                    @yield('content')
                </div>
        
            </main>
        </div>
        
        <!-- inject:js -->
        <script src="{{ asset('js/material.js') }}"></script>
        <{{-- script src="{{ asset('js/widgets/table/table.js') }}"></script>
        <script src="{{ asset('js/d3.js') }}"></script>
        <script src="{{ asset('js/getmdl-select.min.js') }}"></script>
        
        <script src="{{ asset('js/nv.d3.js') }}"></script>
        <script src="{{ asset('js/widgets/employer-form/employer-form.js') }}"></script>
        <script src="{{ asset('js/widgets/line-chart/line-chart-nvd3.js') }}"></script>
        <script src="{{ asset('js/widgets/map/maps.js') }}"></script>
        <script src="{{ asset('js/widgets/pie-chart/pie-chart-nvd3.js') }}"></script>
        
        <script src="{{ asset('js/widgets/todo/todo.js') }}"></script> --}}
        <!-- endinject -->
        
        </body>
</html>
