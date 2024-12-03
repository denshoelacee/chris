<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'user_id' => 1,
                'order_date' => now(),
                'quantity_order' => 5,
                'inventory_id' => 1,
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'user_id' => 2,
                'order_date' => now(),
                'quantity_order' => 3,
                'inventory_id' => 2,
            ],
        ]);
    }
}
