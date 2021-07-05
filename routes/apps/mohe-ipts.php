<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mohe-ipts')->group(function () {
    Route::get('/', function () {
        return view('mohe-ipts.welcome');
    });
});