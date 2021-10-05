@extends('layouts.app')

@section('content')

    <section class="section_cover">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_cover_text">
                        <h2 class="section_cover_prehead text-wine">@lang('content.cover.prehead')</h2>
                        <h1 class="section_cover_head">Karakala.</h1>
                        <h2 class="section_cover_posthead text-wine">@lang('content.cover.posthead')</h2>
                    </div>
                    <p class="section_cover_button text-center"><a href="@lang('navbar.booking.href')"><button type="button" class="btn btn-outline-wine">@lang('navbar.booking')</button></a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_cuisine" id="section_cuisine">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <h2 class="section_cuisine_heading title-detail text-center"><span>@lang('navbar.cuisine')</h2>
                    <p class="text-justify">@lang('content.cuisine')</p>
                    <p>@lang('content.slogan')</p>
                    <img class="img-fluid" src="/img/cuisine.jpg" alt="Cocina libanesa">
                </div>
            </div>
        </div>
    </section>
    <section class="section section_wine" id="section_wine">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <h2 class="section_menu_heading wine-title-detail text-center"><span>@lang('content.wine.title')</span></h2>
                    <p class="text-center"><a href="@lang('options.pdf.wine')" target="_blank">@lang('content.wine.list') <span class="badge badge-pill badge-dark">pdf</span></a></p>
                    <p class="text-justify">@lang('content.wine')</p>
                    <img class="img-fluid" src="/img/mapa-vino.jpg" alt="Carta de vinos Karakala">
                </div>
            </div>
        </div>
    </section>
    <section class="section section_gallery" id="section_gallery">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="section_menu_heading title-detail text-center"><span>@lang('navbar.gallery')</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-8912.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                        <img src="/img/gallery/karakala-img-9041.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-9138.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-9173.jpg" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-8893.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-8972.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-9071.jpg" class="img-fluid">
                </div>
                <div class="section_gallery_grid_item col-6">
                    <img src="/img/gallery/karakala-img-9145.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <a href="/reserva" class="d-sm-block d-md-none">
        <nav class="fixed-bottom booking-nav">
            <div class="container">
                <h3 class="text-center">@lang('content.booking.button')</h3>
            </div>
        </nav>
    </a>

@endsection