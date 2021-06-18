<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/es', function () {
    return redirect('/');
});

Route::get('/ca', function () {
    App::setLocale('ca');

    return view('home');
});

Route::get('/en', function () {
    App::setLocale('en');

    return view('home');
});

Route::get('/fr', function () {
    App::setLocale('fr');

    return view('home');
});

/**
 * Booking routes
 */

Route::get('/reserva', function () {
    return view('booking');
});

Route::post('/reserva', [
    'uses' => 'BookController@send',
    'as' => 'reserva'
]);

Route::get('/es/reserva', function () {
    return redirect('/reserva');
});

Route::get('/ca/reserva', function () {
    App::setLocale('ca');

    return view('booking');
});

Route::post('/ca/reserva', [
    'uses' => 'BookController@send',
    'as' => 'ca.reserva'
]);

Route::get('/en/booking', function () {
    App::setLocale('en');

    return view('booking');
});

Route::get('/fr/reservation', function () {
    App::setLocale('fr');

    return view('booking');
});

Route::post('book/send', [
    'uses' => 'BookController@send',
    'as' => 'book.send',
]);

/**
 * Menu routes
 */

Route::get('/carta', function () {
    return view('menu');
});

Route::get('/ca/carta', function () {
    return view('menu');
});
