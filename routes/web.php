<?php
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/shop-list', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop-create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shop-store', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shop-edit/{id}', [ShopController::class, 'edit'])->name('shop.edit');

