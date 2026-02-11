<?php
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Frontend\AlalController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::post('/store', [FrontController::class, 'store'])->name('store');
Route::get('/session-distroy', [IndexController::class, 'sessionDistroy']); 
Route::get('/alal', [AlalController::class, '__invoke'])->name('alal');
Route::resource('units', UnitController::class);

