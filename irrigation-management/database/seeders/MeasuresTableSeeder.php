<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;
use App\Models\Sensor;
use App\Models\Measure;

class MeasuresTableSeeder extends Seeder
{
    public function run(): void
    {
        $sensors = Sensor::all();
        $date = new Carbon('2000-01-01 00:00');
        $sensorNames = ['S1', 'S2', 'S3', 'S4'];
        $index = 0;

        foreach($sensors as $sensor){
            for($i = 0; $i < 1000; $i++){
                Measure::factory()->create(['sensor_name' => $sensorNames[$index], 'measurement_date' => $date->addMinutes(5)]);

                $index++;

                if($index === 4){
                    $index = 0;
                }
            }
        }
    }
}
