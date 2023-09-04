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
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 20.48,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 20.42,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 10.56,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::yesterday()->addMinutes(5),
            'measurement_value' => 11.08,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => new Carbon('2023-09-01 11:53'),
            'measurement_value' => 11.84,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => new Carbon('2023-07-10 21:00'),
            'measurement_value' => 80.12,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => new Carbon('2023-05-01 08:20'),
            'measurement_value' => 80.05,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 79.98,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 30.69,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 30.98,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 31.06,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 89.36,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 74.38,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 40.29,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 11.00,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 16.98,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 63.25,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 85.39,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 12.56,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 87.45,
        ]);


        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 96.58,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 02.57,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 41.57,
        ]);
        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 58.91,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 93.60,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 87.20,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 25.14,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 87.10,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 90.30,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 12.08,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 50.21,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 71.40,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => Carbon::now(),
            'measurement_value' => 88.20,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => Carbon::now()->subMinutes(5),
            'measurement_value' => 51.47,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => Carbon::now()->subMinutes(10),
            'measurement_value' => 12.13,
        ]);

        //otras medidas del cliente 1
        DB::table('measures')->insert([
            'sensor_name' => 'S1',
            'measurement_date' => new Carbon('2023-09-01 11:53'),
            'measurement_value' => 21.00,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S2',
            'measurement_date' => new Carbon('2023-06-01 12:50'),
            'measurement_value' => 22.00,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S3',
            'measurement_date' => new Carbon('2022-11-01 21:12'),
            'measurement_value' => 23.00,
        ]);

        DB::table('measures')->insert([
            'sensor_name' => 'S4',
            'measurement_date' => new Carbon('2022-12-20 08:54'),
            'measurement_value' => 24.00,
        ]);

    }
}
