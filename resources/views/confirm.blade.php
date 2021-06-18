@extends('layouts.app')

@section('title')
   - @lang('navbar.booking')
@endsection

@section('content')

    <section class="section section_booking">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <h1 class="text-center">@lang('content.booking.thanks')</h1>

                    <p class="text-center">@lang('content.booking.confirm')</p>

                    <img class="img-fluid mx-auto d-block" src="/img/booking-karakala.png" alt="Restaurante Karakala">
                </div>
            </div>
        </div>
    </section>

@endsection