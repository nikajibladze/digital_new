<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
})->name('index');

Route::get('/podcast', function () {
    return view('pages/podcast');
})->name('podcast');