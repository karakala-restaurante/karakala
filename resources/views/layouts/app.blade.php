<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="description" content="Restaurante libanés Karakala. Cocina fenicia en el corazón de Gràcia. Carrer del Torrent de l'Olla, 136, 08012 Barcelona.">
    <meta name="keywords" content="restaurante, cocina, libanesa, líbano, Gracia, Barcelona, Karakala">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <title>Restaurante Karakala @yield('title')</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {!! RecaptchaV3::initJs() !!}
</head>
<body>
<nav class="navbar fixed-top navbar-expand-md navbar-light" id="navApp">
    <a class="navbar-brand" href="@lang('navbar.home.href')">
        <img class="img-fluid logo_karakala" src="/img/karakala-logo.png" alt="Karakala">
    </a>
    <button id="navbar_toggler_control" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav abs-center-x">
            <li class="nav-item">
                <a class="nav-link scroll-link text-wine-hover" href="@lang('navbar.cuisine.href')#section_cuisine">@lang('navbar.cuisine')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-link text-wine-hover" href="@lang('navbar.wine.href')#section_wine">@lang('navbar.wine')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-link text-wine-hover" href="@lang('navbar.gallery.href')#section_gallery">@lang('navbar.gallery')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-wine-hover" href="@lang('navbar.menu.href')">@lang('navbar.menu')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-wine-hover" href="@lang('navbar.booking.href')">@lang('navbar.booking')</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/karakalabarcelona" target="_blank">
                    <img src="/img/FB-f-Logo__blue_29.png" alt="Facebook Karakala" height="20px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/karakalarestaurant/" target="_blank">
                    <img src="/img/instagram_logo_29.png" alt="Instagram Karakala" height="20px">
                </a>
            </li>
        </ul>
        <ul class="navbar-nav" style="margin-left: 5px">
            <select class="form-control form-control-sm" v-model="languageSelected" @change="languageSelection">
                <option value="es">Es</option>
                <option value="ca">Ca</option>
            </select>
        </ul>
    </div>
</nav>
<div class="content">

    @yield('content')

    <section class="section_map" id="section_map">
    </section>

    <footer class="section section_footer">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2 class="text-wine">@lang('content.contact')</h2>
                            <p>@lang('content.restaurant') Karakala</p>
                            <p>Carrer Torrent de l'Olla 136, Barcelona</p>
                            <p>@lang('content.phone'): <a class="tel-link" href="tel:931064019">93 106 40 19</a></p>
                            <p>@lang('content.email'): karakala.restaurante@gmail.com</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <h2 class="text-wine">@lang('content.openingTimeTitle')</h2>
                            <p>@lang('content.days')</p>
                            <p>@lang('content.openingTime')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjDBG0-D-KzRZ4cTAKRztTf7KJsMrNSeI&callback=initMap">
</script>
<script src="/js/map.js"></script>
</html>
