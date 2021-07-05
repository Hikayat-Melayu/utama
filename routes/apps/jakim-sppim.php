<?php

use Illuminate\Support\Facades\Route;

Route::prefix('jakim-sppim')->group(function () {
    Route::get('/', function () {
        return view('jakim-sppim.welcome');
    });
});