<?php

use Illuminate\Support\Facades\Route;

Route::prefix('demo')->group(function () {
    Route::get('/', function () {
        return view('demo.welcome');
    });
});