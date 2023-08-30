<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;

class MeasuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 20.55,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 20.48,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 20.42,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 10.56,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 11.08,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 11.84,
        ]);


        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 80.12,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 80.05,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 79.98,
        ]);


        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 30.69,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 30.98,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 31.06,
        ]);

    }
}
