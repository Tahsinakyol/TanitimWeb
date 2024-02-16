<!--
        ******    *******
          **      ** * **
          **  **  **   **
 -->

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/content/{q}', [ContentController::class, "index"])->name('content');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/invite', function () {
    return view('invite');
})->name('invite');
Route::get('/about', function () {
    return view('about');
})->name('about');
