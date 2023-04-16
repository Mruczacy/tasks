<?php

declare(strict_types=1);

use App\Models\Car;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carrables', function (Blueprint $table) {
            $table->foreignIdFor(Car::class);
            $table->integer("carrable_id");
            $table->string("carrable_type");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carrables');
    }
};
