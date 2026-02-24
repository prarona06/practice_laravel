<?php
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Frontend\AlalController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

