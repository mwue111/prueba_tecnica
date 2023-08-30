<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MeasureSensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('measure_sensor')->insert([
            'measure_id' => 1,
            'sensor_id' => 1,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 2,
            'sensor_id' => 1,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 3,
            'sensor_id' => 1,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 4,
            'sensor_id' => 2,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 5,
            'sensor_id' => 2,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 6,
            'sensor_id' => 2,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 7,
            'sensor_id' => 3,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 8,
            'sensor_id' => 3,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 9,
            'sensor_id' => 3,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 10,
            'sensor_id' => 4,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 11,
            'sensor_id' => 4,
        ]);

        DB::table('measure_sensor')->insert([
            'measure_id' => 12,
            'sensor_id' => 4,
        ]);

    }
}
