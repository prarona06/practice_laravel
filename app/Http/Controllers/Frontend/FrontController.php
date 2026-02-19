<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Requests\storePostRequest;
use Illuminate\Support\Facades\Log;

class FrontController extends Controller
{
public function store(storePostRequest $request)
{
    Log::warning('warning massage');
Log::info('store method call with dada:', $request->all());
}
}
