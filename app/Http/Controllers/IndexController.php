<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\support\Facades\view;

class IndexController extends Controller
{
    public function about()
    {
        //store data in session
        session([
            'application_name' => 'Laravel_Herd',
            'application_version' => '1.0.0',]);


            //facard use kore 
            session::put('user_name', 'John Doe');
$pageTitle = 'About Us';
 //return view ('students.student' , compact('pageTitle'));
 return view :: first(['students.student', 'about'],['pageTitle' => $pageTitle]);

    }

    public function store(Request $request)
    {
        dd ($request->all());
    }
}
