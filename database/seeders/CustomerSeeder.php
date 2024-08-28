<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Seed the customers table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Elm Street, Springfield, IL',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'phone' => '234-567-8901',
                'address' => '456 Oak Avenue, Rivertown, TX',
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'phone' => '345-678-9012',
                'address' => '789 Pine Road, Lakeside, CA',
            ],
            
        ]);
    }
}
