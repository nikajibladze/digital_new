<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StructuresController;
use App\Http\Controllers\DigitalController;
Route::get('/', function () {
    return view('pages/index');
})->name('index');

Route::get('/podcast', function () {
    return view('pages/podcast');
})->name('podcast');

Route::get('/share', function () {
    return view('pages/share');
})->name('share');

Route::get('/login', function () {
    return view('pages/login');
})->name('login');

Route::get('/discuss', function () {
    return view('pages/discuss');
})->name('discuss');

Route::get('/stats', function () {
    return view('pages/stats');
})->name('stats');


Route::get('/digital/{id?}', [DigitalController::class, 'show'])->name('digital.single');

// Route::get('pages/single/digital/{id}', function () {
//    return view('pages/single/digital');
// })->name('digital.single');

Route::get('pages/list/digital/{id}', function () {
   // return view('pages/list/digital');
})->name('digital.list');


Route::get('/get-tree-data', [StructuresController::class, 'getTreeData']);