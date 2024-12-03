<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiderInfoSeeder extends Seeder
{
    public function run():void
    {
        DB::table('rider_info')->insert([
            [
                'rider_info_id' => 1,
                'vehicle_brand' => 'Toyota',
                'vehicle_type' => 'Sedan',
                'vehicle_model' => 'Corolla',
                'user_id' => 1,
            ],
            [
                'rider_info_id' => 2,
                'vehicle_brand' => 'Honda',
                'vehicle_type' => 'Motorcycle',
                'vehicle_model' => 'CBR150R',
                'user_id' => 2,
            ],
        ]);
    }
}
