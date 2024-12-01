<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Import User model
use Illuminate\Support\Facades\Hash; // Import Hash facade

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user manually
        User::create([
            'name' => 'Admin 1User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 1, // Set approved status to true
        ]);
        User::create([
            'name' => 'Admin2 User',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password1'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 0, // Set approved status to true
        ]);

        User::create([
            'name' => 'Admin 3User',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password2'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 0, // Set approved status to true
        ]);

        User::create([
            'name' => 'Admin 4User',
            'email' => 'admin3@example.com',
            'password' => Hash::make('password3'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 0, // Set approved status to true
        ]);

        User::create([
            'name' => 'Admin 5User',
            'email' => 'admin4@example.com',
            'password' => Hash::make('password4'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 0, // Set approved status to true
        ]);

        User::create([
            'name' => 'Admin 6User',
            'email' => 'Supplier@example.com',
            'password' => Hash::make('password5'), // Use a secure password in production
            'role' => 'Supplier',
            'approved' => 0, // Set approved status to true
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
