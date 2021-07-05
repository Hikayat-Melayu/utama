<?php

use Illuminate\Support\Facades\Route;

Route::prefix('bnm-iams')->group(function () {
    Route::get('/', function () {
        return view('bnm-iams.welcome');
    });
});