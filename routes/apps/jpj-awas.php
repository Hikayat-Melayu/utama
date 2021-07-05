<?php

use Illuminate\Support\Facades\Route;

Route::prefix('jpj-awas')->group(function () {
    Route::get('/', function () {
        return view('jpj-awas.welcome');
    });
});