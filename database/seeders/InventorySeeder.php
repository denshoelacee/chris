<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    public function run()
    {
        DB::table('inventory')->insert([
            [
                'product_id' => 1,
                'product_name' => 'Product A',
                'product_desc' => 'Description for Product A',
                'quantity' => 50,
                'unit_price' => 100.00,
            ],
            [
                'product_id' => 2,
                'product_name' => 'Product B',
                'product_desc' => 'Description for Product B',
                'quantity' => 30,
                'unit_price' => 150.00,
            ],
        ]);
    }
}
