<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

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
        $serial_number = Str::random(6);

        return [
            'serial_number' => $serial_number,
            'registration_date' => fake()->date(),
            'last_connection' => fake()->date(),
        ];
    }

}
