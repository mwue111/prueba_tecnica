<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measure>
 */
class MeasureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $minValue = 0.0;
        $maxValue = 10.0;
        $precision = 2;

        $random = $this->randomDouble($minValue, $maxValue, $precision);

        return [
            'measurement_value' => $random,
        ];
    }

    function randomDouble($min, $max, $precision = 2) {
        $randomInt = mt_rand($min * pow(10, $precision), $max * pow(10, $precision));
        return $randomInt / pow(10, $precision);
    }
}
