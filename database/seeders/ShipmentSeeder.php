<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('shipments')->insert([
            [
                'shipment_id' => 1,
                'order_id' => 1,
                'user_id' => 1,
                'shipment_date' => now(),
                'est_arr_date' => now()->addDays(3),
                'act_arr_date' => null,
            ],
            [
                'shipment_id' => 2,
                'order_id' => 2,
                'user_id' => 2,
                'shipment_date' => now(),
                'est_arr_date' => now()->addDays(5),
                'act_arr_date' => null,
            ],
        ]);
    }
}
