<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StructuresController;
Route::get('/', function () {
    return view('pages/index');
})->name('index');

Route::get('/podcast', function () {
    return view('pages/podcast');
})->name('podcast');

Route::get('/share', function () {
    return view('pages/share');
})->name('share');

Route::get('/get-tree-data', [StructuresController::class, 'getTreeData']);