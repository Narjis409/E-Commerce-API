<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'cost' => 10.00,
                'price' => 15.00,
                'category_id' => 1,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'cost' => 20.00,
                'price' => 25.00,
                'category_id' => 2,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
