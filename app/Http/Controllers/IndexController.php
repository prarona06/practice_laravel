<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\support\Facades\view;

class IndexController extends Controller
{
    public function about()
    {

$pageTitle = 'About Us';
 //return view ('students.student' , compact('pageTitle'));
 return view :: first(['students.studeooooont', 'about'],['pageTitle' => $pageTitle]);

    }

    public function store(Request $request)
    {
        dd ($request->all());
    }
}
