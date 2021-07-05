<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tabunghaji-hartanah')->group(function () {
    Route::get('/', function () {
        return view('tabunghaji-hartanah.welcome');
    });
});