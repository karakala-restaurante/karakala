<?php

use Illuminate\Support\Facades\Route;

Route::post('/cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache cleared.';
});