<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama hosting
            $table->decimal('price', 8, 2); // Harga hosting
            $table->enum('status', ['active', 'inactive']); // Status hosting
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan user
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
