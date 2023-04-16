<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Order;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $worker = Worker::factory(1)->create();
        $client = Client::factory(1)->create(['worker_id' => Worker::find(1)->id]);
        $order = Order::factory(5)->create(['client_id' => Client::find(1)->id]);
    }
}
