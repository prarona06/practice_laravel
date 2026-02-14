<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Requests\storePostRequest;

class FrontController extends Controller
{
public function store(storePostRequest $request)
{
$validatedData = $request->validated();
dd($validatedData);

}
}
