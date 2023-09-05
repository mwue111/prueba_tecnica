<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Irrigation;
use App\Models\Sensor;
use DB;

class IrrigationSensorTableSeeder extends Seeder
{
    public function run(): void
    {
            $irrigations = Irrigation::all();

            $sensor_id = 1;

            foreach ($irrigations as $irrigation) {
                for($i = 0; $i < 4; $i++){
                    $irrigation->sensors()->attach(['sensor_id' => $sensor_id]);

                    $sensor_id++;
                }
            }
    }
}
