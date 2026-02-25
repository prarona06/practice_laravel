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

    public function store(Request $request)
    {
        //store data to database
      $request()->validate([
          'shop_name' => 'required|max:25|unique:shops',
          'shop_number'=> 'required|max:25',
          'shop_address'=> 'required|max:25',
          'shop_phone'=> 'required|max:15',
          'shop_email'=> 'required|email|max:255',
          'tin_number'
        ]);
//insert data to database
        DB::table('shops')->insert([
            'name' => $request->shop_name,
            'number' => $request->shop_number,
            'address' => $request->shop_address,
            'phone' => $request->shop_phone,
            'email' => $request->shop_email,
            'tin_number' => $request->tin_number,
            'created_at' => now()
        ]);
        return redirect()->back()->with('success', 'Shop created successfully!');

    }
}
