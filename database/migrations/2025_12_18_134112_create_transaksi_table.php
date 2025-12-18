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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->text("keterangan");
            $table->double("total");
            $table->dateTime("tanggal");
            $table->tinyInteger("tipe");

            $table->foreignId("anggota_id")->references("id")->on("anggota_kelas");
            $table->foreignId("anggaran_kas_id")->references("id")->on("anggaran_kas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
