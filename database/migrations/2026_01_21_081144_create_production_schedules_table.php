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
        Schema::create('production_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mesin_id')->constrained('mesin');
            $table->foreignId('produk_id')->constrained('produk');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('shift');
            $table->enum('status', ['planned', 'running', 'finished'])->default('planned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_schedules');
    }
};
