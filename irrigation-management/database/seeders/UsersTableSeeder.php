<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'password' => '$2y$10$pfHWAKrqVXL/7UonqYej3eRofXgfObADWYHjRbgfr7suU6/Zq4cIC',
        ]);
    }
}
