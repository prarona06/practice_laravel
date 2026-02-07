<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', [IndexController::class, 'about'])->name('about.us');
Route::post('/store', [IndexController::class, 'store'])->name('store');

