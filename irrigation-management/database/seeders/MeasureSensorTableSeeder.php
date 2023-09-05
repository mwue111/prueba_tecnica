<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sensor;
use App\Models\Measure;
use DB;

class MeasureSensorTableSeeder extends Seeder
{
    public function run(): void {
        $measures = Measure::all();
        $sensors = Sensor::all();

        if ($measures->isEmpty() || $sensors->isEmpty()) {
            return;
        }

        $measureCount = $measures->count();
        $sensorCount = $sensors->count();

        foreach ($measures as $index => $measure) {
            $sensorIndex = $index % $sensorCount;
            $sensor = $sensors->get($sensorIndex);
            $measure->sensors()->attach($sensor->id);
        }

    }
}
