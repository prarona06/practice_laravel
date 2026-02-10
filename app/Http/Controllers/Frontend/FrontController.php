<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

class FrontController extends Controller
{
public function store(Request $request)
{

//$pageTitle = 'About Us';


//dd($request->url());
   // return view ('about' , compact('pageTitle'));
   //return response('Hello World', 200)->cookie('test_cookie', 'test_value', 60);//60 mit obdi cookie thakbe 60 minute por expire hobe
 //return redirect()->route('about.us');
// return redirect([IndexController::class, 'about']); //onno controler er jekono method a redirect krte chaile
//return view('welcome');
return response ()->json([
    'message' => 'Data received successfully',
    'data' => $request->all()
], 200);

}
}
