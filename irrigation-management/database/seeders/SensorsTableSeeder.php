<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Irrigation;
use App\Models\Sensor;
use DB;

class SensorsTableSeeder extends Seeder
{
    public function run(): void
    {
        $irrigations = Irrigation::all();

        foreach($irrigations as $irrigation) {
            Sensor::factory()->create(['name' => 'S1']);
            Sensor::factory()->create(['name' => 'S2']);
            Sensor::factory()->create(['name' => 'S3']);
            Sensor::factory()->create(['name' => 'S4']);
        }
    }
}
