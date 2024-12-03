<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'John Doe',
                'age' => 30,
                'gender' => 'Male',
                'phone_num' => '1234567890',
                'barangay' => 'Barangay 1',
                'municipality' => 'Municipality 1',
                'city' => 'City 1',
                'postal' => '12345',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
                'approved' => true,

            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'age' => 25,
                'gender' => 'Female',
                'phone_num' => '9876543210',
                'barangay' => 'Barangay 2',
                'municipality' => 'Municipality 2',
                'city' => 'City 2',
                'postal' => '67890',
                'email' => 'janesmith@example.com',
                'password' => Hash::make('password'),
                'role' => 'Supplier',
                'approved' => false,
            ],
        ]);
    }
}
