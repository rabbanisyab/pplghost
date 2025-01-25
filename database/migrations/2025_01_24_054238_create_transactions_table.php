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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan pengguna
            $table->foreignId('hosting_id')->constrained()->onDelete('cascade'); // Relasi dengan hosting
            $table->decimal('amount', 10, 2); // Jumlah uang yang dibayarkan
            $table->enum('type', ['payment', 'refund']); // Jenis transaksi
            $table->enum('status', ['pending', 'completed', 'failed']); // Status transaksi
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
