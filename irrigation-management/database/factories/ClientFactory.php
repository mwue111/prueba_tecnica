<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = Str::random(6);
        $cif = strtoupper(Str::random(1)) . $this->faker->unique()->numerify('########');

        return [
            'code' => $code,
            'name' => fake()->unique()->name(),
            'cif' => $cif,
            'address' => fake()->address(),
            'city' => fake()->city(),
            'town' => fake()->city(),
            'start_contract' => fake()->date(),
            'end_contract' => fake()->date(),
        ];
    }
}
