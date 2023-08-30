<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use DB;

class IrrigationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('irrigations')->insert([
            'client_id' => 1,
            'model' => 'A',
            'serial_number' => Str::random(5),
            'registration_date' => '2022-01-01',
            'last_connection' => Carbon::now(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 1,
            'model' => 'B',
            'serial_number' => Str::random(5),
            'registration_date' => '2023-01-01',
            'last_connection' => Carbon::yesterday(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 1,
            'model' => 'C',
            'serial_number' => Str::random(5),
            'registration_date' => '2020-01-01',
            'last_connection' => '2023-08-01',
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 2,
            'model' => 'A',
            'serial_number' => Str::random(5),
            'registration_date' => '2023-08-01',
            'last_connection' => Carbon::now(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 2,
            'model' => 'B',
            'serial_number' => Str::random(5),
            'registration_date' => '2023-01-01',
            'last_connection' => Carbon::yesterday(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 2,
            'model' => 'C',
            'serial_number' => Str::random(5),
            'registration_date' => '2022-01-01',
            'last_connection' => '2022-12-31',
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 3,
            'model' => 'A',
            'serial_number' => Str::random(5),
            'registration_date' => '2022-08-01',
            'last_connection' => Carbon::now(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 3,
            'model' => 'B',
            'serial_number' => Str::random(5),
            'registration_date' => '2020-01-01',
            'last_connection' => Carbon::yesterday(),
        ]);

        DB::table('irrigations')->insert([
            'client_id' => 3,
            'model' => 'C',
            'serial_number' => Str::random(5),
            'registration_date' => '2023-01-01',
            'last_connection' => '2023-06-01',
        ]);
    }
}
