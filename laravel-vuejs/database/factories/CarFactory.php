<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand' => $this->faker->name(),
            'model' => $this->faker->name(),
            'year' => $this->faker->randomDigit()
        ];
    }
}
