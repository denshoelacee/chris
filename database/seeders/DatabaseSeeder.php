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
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Use a secure password in production
            'role' => 'Admin',
            'approved' => 1, // Set approved status to true
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
