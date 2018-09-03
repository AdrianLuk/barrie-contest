<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Barrieing - Coming Soon</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

        @include('partials.header')

        <main class="p-0">
            @yield('content')
        </main>

<footer class="footer p-3 p-md-5">
        <div class="container d-flex flex-column justify-content-center">
            <img width="329" height="109" class="img-fluid mx-auto" src="img/barrieing-logo.svg" alt="barrie footer logo">
            <!--<div class="footer-social text-center container col-12 col-md-6 offset-md-3 justify-content-around mt-4">
                <a href="javascript:void(0);" target="_blank"><span class="fab fa-youtube fa-2x"></span></a>
                <a href="https://twitter.com/barrieing" target="_blank"><span class="fab fa-twitter fa-2x"></span></a>
                <a href="https://facebook.com/Barrieing-272908523473077" target="_blank"><span class="fab fa-facebook fa-2x"></span></a>
                <a href="https://pinterest.ca/barrieing" target="_blank"><span class="fab fa-pinterest fa-2x"></span></a>
                <a href="https://instagram.com/barrieing" target="_blank"><span class="fab fa-instagram fa-2x"></span></a>
            </div>-->
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <!-- <script src="js/flipclock.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.4.2/cleave.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.4.2/addons/cleave-phone.ca.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
