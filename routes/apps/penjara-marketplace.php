<?php

use Illuminate\Support\Facades\Route;

Route::prefix('penjara-marketplace')->group(function () {
    Route::get('/', function () {
        return view('penjara-marketplace.welcome');
    });
});