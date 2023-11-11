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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('model');
            $table->integer('tahun');
            $table->integer('jumlahPenumpang');
            $table->string('manufaktur');
            $table->float('harga');
            $table->string('tipeBahanBakar')->nullable();
            $table->float('luasKargo')->nullable();
            $table->float('ukuranBagasi')->nullable();
            $table->float('kapasitasBahanBakar')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
