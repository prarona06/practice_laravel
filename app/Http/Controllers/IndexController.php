<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about()
    {

 
        $pageTitle = 'About Us';
        return view ('about', compact('pageTitle'));
    }
}
