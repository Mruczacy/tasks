<?php

declare(strict_types=1);

use App\Models\Worker;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->foreignIdFor(Worker::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
