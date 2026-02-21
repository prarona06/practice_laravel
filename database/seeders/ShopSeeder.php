<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
{
    for ($i = 1; $i <= 10; $i++) {
        DB::table('shops')->insert([
            'shop_name' => 'My Shop ' . $i,
            'shop_number' => $i,
            'shop_address' => '123 Main St ' . $i,
            'shop_phone' => 5551234 + $i,
            'shop_email' => 'myshop' . $i . '@example.com',
            'shop_tin_number' => 'TIN123456',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
}
