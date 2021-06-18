@extends('layouts.app')

@section('title')
   - @lang('navbar.menu')
@endsection

@php
    $path =  storage_path() . '/data/menu.json';
    $json = json_decode(file_get_contents($path), true);
    //dd($json['cold-starters']);
@endphp

@section('content')

    <section class="section section_menu">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <h1>Nuestra carta</h1>
                    <br>
                    <h2 class="text-wine">El Mezze</h2>
                    <p>O el arte oriental del disfrute</p>
                    <p>En Oriente Medio, comer significa compartir. Hay un verbo especial para esto, netmazmaz, que significa disfrutar un largo momento de compañía y de comida, poco a poco.
                        Muchos platitos, fríos y calientes, buenos vinos. Un recorrido amoroso por la cultura gastronómica del Mediterráneo.
                        Déjate llevar, nos vamos de viaje.
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h4>El Karakala</h4>
                                <p>8 platitos (con postre incluído)</p>
                            </div>
                            <div class="col">
                                24,50€ /persona
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>El Festín</h4>
                                <p>12 platitos (con postre incluído)</p>
                            </div>
                            <div class="col">
                                32€ /persona
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <p class="text-center">mínimo 2 personas</p>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <h2 class="text-wine">Entrantes fríos</h2>
                    <br>
                    @foreach ($json['cold-first-course'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}€</p>
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <h2 class="text-wine">Entrantes calientes</h2>
                    <br>
                    @foreach ($json['hot-first-course'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}€</p>
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <h2 class="text-wine">Ensaladas</h2>
                    <br>
                    @foreach ($json['salads'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}€</p>
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <h2 class="text-wine">Segundos platos</h2>
                    <br>
                    @foreach ($json['main-courses'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}€</p>
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <h2 class="text-wine">Postres</h2>
                    <br>
                    @foreach ($json['desserts'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}€</p>
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <h2 class="text-wine">Menú del día</h2>
                    <h3>Primeros</h3>
                    <br>
                    @foreach ($json['daily-menu-first-courses'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <h3>Segundos</h3>
                    <br>
                    @foreach ($json['daily-menu-main-courses'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <div class="row">
                        <div class="col-8">
                            <h5>Pan y postre o café</h5>
                        </div>
                        <div class="col-2">
                            <h5>12,5€</h5>
                        </div>
                    </div>
                    <h5 class="text-center">Y SUGERENCIAS CADA DÍA</h5>
                    <hr>

                    <h2 class="text-wine">Menú fin de semana</h2>
                    <h3>Primeros</h3>
                    <br>
                    @foreach ($json['weekend-menu-first-courses'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <h3>Segundos</h3>
                    <br>
                    @foreach ($json['weekend-menu-main-courses'] as $item)
                        <div class="row">
                            <div class="col-8">
                                <h4>{{ $item["name"] }}</h4>
                                <p>{{ $item["description"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["type"] }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ $item["price"] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <div class="row">
                        <div class="col-8">
                            <h5>Pan y postre o café</4>
                        </div>
                        <div class="col-2">
                            <h5>13,95€</h5>
                        </div>
                    </div>
                    <hr>

                    <br>
                    <p>-v- vegetariano</p>
                    <p>V vegano</p>

                </div>
            </div>
        </div>
    </section>

@endsection