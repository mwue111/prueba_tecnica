<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Irrigation>
 */
class IrrigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $serial_number = '';

        for ($i = 0; $i < 6; $i++) {
            $serial_number .= $characters[rand(0, strlen($characters) - 1)];
        }

        return [
            'serial_number' => $serial_number,
            'registration_date' => $this->faker->date(),
            'last_connection' => $this->faker->date(),
        ];
    }

}
