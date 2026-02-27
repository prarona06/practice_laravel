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

        return view('shop.index', compact('ShopLists'));
    }


    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        //store data to database
      $request->validate([
          'shop_name' => 'required|max:255|unique:shops,shop_name',
          'shop_number'=> 'required|max:255',
          'shop_address'=> 'required|max:255',
          'shop_phone'=> 'required|max:155',
          'shop_email'=> 'required|email|max:255',
          'shop_tin_number' => 'required|nullable|max:255'
        ]);
//insert data to database
      DB::table('shops')->insert([
    'shop_name' => $request->shop_name,
    'shop_number' => $request->shop_number,
    'shop_address' => $request->shop_address,
    'shop_phone' => $request->shop_phone,
    'shop_email' => $request->shop_email,
    'shop_tin_number' => $request->shop_tin_number,
    'created_at' => now()
]);
        return redirect()->back()->with('success', 'Shop created successfully!');

    }


    public function edit($id)
    {
        $shop = DB::table('shops')->where('id', $id)->first();

        return view('shop.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
        //update data to database
         $request->validate([
          'shop_name' => 'required|max:255|unique:shops,shop_name,' . $id,
          'shop_number'=> 'required|max:255',
          'shop_address'=> 'required|max:255',
          'shop_phone'=> 'required|max:155',
          'shop_email'=> 'required|email|max:255',
          'shop_tin_number' => 'required|nullable|max:255'
        ]);

     try{   DB::table('shops')->where('id', $id)->update([
            'shop_name' => $request->shop_name,
            'shop_number' => $request->shop_number,
            'shop_address' => $request->shop_address,
            'shop_phone' => $request->shop_phone,
            'shop_email' => $request->shop_email,
            'shop_tin_number' => $request->shop_tin_number,
            'updated_at' => now()
        ]);
        return redirect()->route('shop.index')->with('success', 'Shop updated successfully!');}
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Failed to update shop: ' . $e->getMessage());
        }

    }

    public function delete($id)
    {
        //delete data from database
        DB::table('shops')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Shop deleted successfully!');
    }
}
