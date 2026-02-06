<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mesin', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mesin');
            $table->string('tipe_mesin')->nullable();
            $table->enum('status_mesin', ['aktif', 'maintenance', 'nonaktif'])->default('aktif');
            $table->string('lokasi')->nullable();
            $table->timestamps();

            // optional: untuk optimasi relasi ke jadwal produksi
            $table->index('status_mesin');
            $table->index('nama_mesin');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mesin');
    }
};