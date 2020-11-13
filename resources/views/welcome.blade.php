<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <!-- Styles -->
    </head>
    <body>
        <div class="navbar fixed-top">
            <nav class="navbar navbar-default navbar-static-top navbar fixed-top container">
                <div class="navbar-header top-bar-left">
                    <!-- Hamburger menu-->
                    <div id="burger-menu">
                        <i class="fa fa-bars"></i>
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </div>
                <!-- Logo Image -->
                <div class="logo top-bar-center">
                    <img src="{{asset('images/logo-imdb.png')}}"
                         class="logo"
                         alt="Logo-imdb"
                         width="85px">
                </div>
                <!-- user login -->
                <div class="top-bar-right user">
                    <a href="#">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </nav>
        </div>
        <!-- main menu content-->
        <div id="main-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h2>This is a full screen menu</h2>
                        <h2>Close me from the upper "Back Arrow"</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-content" id="app">
            <div class="container">
                <movie-component></movie-component>
            </div>
        </div>
        <!-- Scripts-  start -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Scripts - end -->
    </body>
</html>
