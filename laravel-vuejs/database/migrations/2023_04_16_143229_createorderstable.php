<?php

declare(strict_types=1);

use App\Enums\OrderStatus;
use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->foreignIdFor(Client::class);
            $table->enum('status', OrderStatus::TYPES)->default(OrderStatus::PENDING);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
