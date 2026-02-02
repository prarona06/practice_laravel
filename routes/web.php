<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us-may-page', [IndexController::class, 'about'])->name('about.us');

