<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
App\Models\Shop;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
{
   App\Models\Shop::factory()->count(10)->create();
    }
}

