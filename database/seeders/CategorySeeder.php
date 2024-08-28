<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the categories table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electronics',
                'description' => 'Devices and gadgets',
            ],
            [
                'name' => 'Clothing',
                'description' => 'Apparel and accessories',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Household items and kitchenware',
            ],
            
        ]);
    }
}
