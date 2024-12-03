<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\InventorySeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\ShipmentSeeder;
use Database\Seeders\RiderInfoSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        $this->call([
            UserSeeder::class,
            InventorySeeder::class,
            OrderSeeder::class,
            ShipmentSeeder::class,
            RiderInfoSeeder::class,
        ]);
    }
}
