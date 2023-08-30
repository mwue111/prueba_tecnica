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
        // \App\Models\User::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ClientsTableSeeder::class);
        $this->call(IrrigationsTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(MeasuresTableSeeder::class);
        $this->call(IrrigationSensorTableSeeder::class);
        $this->call(MeasureSensorTableSeeder::class);
    }
}
