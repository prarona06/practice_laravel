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
            'name' => 'Laravel_Herd',
            'version' => '1.0.0',]);


            //facard use kore 
            session::put('user_name', 'John Doe');
$pageTitle = 'About Us';
 $name = session('name');
 $version = session('version');
    $user_name = session('user_name');

    return $name . ', ' . $version . ',' . $user_name;


 //return view ('students.student' , compact('pageTitle'));
// return view :: first(['students.student', 'about'],['pageTitle' => $pageTitle]);


    }
    public function sessionDistroy()
    {
        //session::flush(); //session er sob data delete kore dey
        session::forget('name'); //specific session data delete kore dey
        return 'Session data has been deleted';
    }
    public function store(Request $request)
    {
        dd ($request->all());
    }
}
