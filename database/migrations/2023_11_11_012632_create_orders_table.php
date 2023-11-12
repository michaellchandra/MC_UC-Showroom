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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kendaraan');
            $table->foreignId('id_customer');
            $table->timestamps();
            // $table->foreign('id_kendaraan')->references('id')->on('Vehicle');
            // $table->foreign('id_customer')->references('id')->on('Customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
