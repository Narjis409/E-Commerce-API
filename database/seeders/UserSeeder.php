<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Alice Doe',
                'email' => 'alice.doe@example.com',
                'password' => Hash::make('password123'), // Use a hashed password
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'password' => Hash::make('password456'),
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'password' => Hash::make('password789'),
            ],
            // Add more users as needed
        ];

        DB::table('users')->insert($users);
    }
}
