<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Client;
use App\Models\Irrigation;
use DB;

class IrrigationsTableSeeder extends Seeder
{

    public function run()
    {
        $clients = Client::all();

        foreach ($clients as $client) {
            Irrigation::factory(10)->create(['client_id' => $client->id, 'model' => 'A']);
            Irrigation::factory(10)->create(['client_id' => $client->id, 'model' => 'B']);
            Irrigation::factory(10)->create(['client_id' => $client->id, 'model' => 'C']);
        }
    }
}
