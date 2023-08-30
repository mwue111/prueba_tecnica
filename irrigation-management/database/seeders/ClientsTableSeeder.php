<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            'code' => Str::random(6),
            'name' => 'Jardinería Almería',
            'cif' => 'B123456789',
            'address' => 'Calle Real',
            'city' => 'Almería',
            'town' => 'Almería',
            'start_contract' => '2023-01-01',
            'end_contract' => '2023-12-01',
        ]);

        DB::table('clients')->insert([
            'code' => Str::random(6),
            'name' => 'Hotel Almería',
            'cif' => 'B987123863',
            'address' => 'Calle Alfareros',
            'city' => 'Almería',
            'town' => 'Almería',
            'start_contract' => '2023-02-01',
            'end_contract' => '2024-01-01',
        ]);

        DB::table('clients')->insert([
            'code' => Str::random(6),
            'name' => 'CASI',
            'cif' => 'B963265147',
            'address' => 'Carretera de Níjar',
            'city' => 'Almería',
            'town' => 'Almería',
            'start_contract' => '2022-01-01',
            'end_contract' => '2024-12-01',
        ]);
    }
}
