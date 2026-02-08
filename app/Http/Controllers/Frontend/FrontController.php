<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
public function store(Request $request)
{

$pageTitle = 'About Us';


dd($request->url());
    return view ('about' , compact('pageTitle'));
}
}
