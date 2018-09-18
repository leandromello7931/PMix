<!DOCTYPE html>
<html lang="br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- endinject -->
        <style>
        body {
            display: flex;
            height: 100vh;
          }
          
          .mdc-drawer-app-content {
            flex: auto;
            overflow: auto;
          }
          
          .main-content {
            overflow: auto;
            height: 100%;
          }
          
          .app-bar {
            position: absolute;
          }
        </style>
    </head>
    <body>
        @include('template.drawer')
        <div class="mdc-drawer-app-content">
            @include('template.top_app_bar')
            <main class="main-content" id="main-content">
                    <div class="mdc-top-app-bar--fixed-adjust">
                            <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                        @yield('content')
                                        </div></div></div>
                    </div>
                    
                    </div>
                  </main>
            </main>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
        </body>
</html>
