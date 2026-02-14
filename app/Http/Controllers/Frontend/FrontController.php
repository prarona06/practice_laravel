<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

class FrontController extends Controller
{
public function store(Request $request)
{

$pageTitle = 'About Us';


//validate the request data
$request->validate([
    'name' => 'required|string|max:255',
    'phone' => 'nullable|required|string|min:11|max:11',
    'email' => 'required|email|max:255',
]);

//when pass login here

//insert data in database
}
}
