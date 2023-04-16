<?php

declare(strict_types=1);

namespace Tests\Feature\methodsAndRelationships;

use App\Models\Car;
use App\Models\Client;
use App\Models\Worker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    public function testCheckIfUsedBy(): void
    {
        $client = Client::factory()->create();
        $client2 = Client::factory()->create();
        $worker = Worker::factory()->create();
        $worker2 = Worker::factory()->create();
        $car = Car::factory()->create();
        $car->workers()->attach($worker);
        $car->clients()->attach($client);
        $this->assertTrue($car->checkIfUsedBy($worker));
        $this->assertTrue($car->checkIfUsedBy($client));
        $this->assertFalse($car->checkIfUsedBy($worker2));
        $this->assertFalse($car->checkIfUsedBy($client2));
    }
}
