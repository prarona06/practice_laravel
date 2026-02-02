<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about()
    {

    //$about =About :: all(); //model use koew query chalano
    //$about =DB::table('abouts')->get(); //query builder use kore query chalano


 /* Log::info('About page');
        $pageTitle = 'About Us';
        return view ('about', compact('pageTitle'));*/
        $pageTitle = 'About Us';
        return view ('about', compact('pageTitle'));
    }
}
