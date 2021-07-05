<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mafi-lesen-rmp')->group(function () {
    Route::get('/', function () {
        return view('mafi-lesen-rmp.welcome');
    });
});