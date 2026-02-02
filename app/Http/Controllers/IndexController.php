<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about()
    {

    $about =About :: all(); //model use koew query chalano
    $about =DB::table('abouts')->get(); //query builder use kore query chalano

        $pageTitle = 'About Us';
        return view('about', compact('pageTitle'));
    }
}
