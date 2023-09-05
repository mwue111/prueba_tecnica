<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Client::factory(1000)->create();

        // $this->call(ClientsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(IrrigationsTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(IrrigationSensorTableSeeder::class);
        $this->call(MeasuresTableSeeder::class);
        $this->call(MeasureSensorTableSeeder::class);
    }
}
