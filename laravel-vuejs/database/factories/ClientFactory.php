<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'worker_id' => Worker::factory(),
        ];
    }
}
