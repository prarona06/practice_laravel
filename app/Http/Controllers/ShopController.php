<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        //read data from database

    $ShopLists= DB::table('shops')->get();
    dd($ShopLists);
        return view('shop.index', compact('ShopLists'));
    }


    public function create()
    {
        return view('shop.create');
    }
}
