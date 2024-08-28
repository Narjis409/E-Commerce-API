<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductSeeder extends Seeder
{
    /**
     * Seed the products table.
     *
     * @return void
     */
    public function run()
    {
       
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        
        if (empty($categoryIds)) {
            Log::warning('No categories found to assign products.');
            return;
        }

        $products = [
            [
                'name' => 'Smartphone',
                'description' => 'Latest model with advanced features.',
                'cost' => 300.00,
                'price' => 399.99,
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'stock' => 50,
            ],
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop for professionals.',
                'cost' => 800.00,
                'price' => 999.99,
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'stock' => 30,
            ],
            [
                'name' => 'Headphones',
                'description' => 'Noise-cancelling wireless headphones.',
                'cost' => 150.00,
                'price' => 199.99,
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'stock' => 100,
            ],
            // Add more products as needed
        ];

        DB::table('products')->insert($products);
    }
}
