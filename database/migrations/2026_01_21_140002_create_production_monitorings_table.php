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
        Schema::create('production_monitorings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('production_schedule_id')
                    ->constrained('production_schedules')
                    ->cascadeOnDelete();

            $table->date('tanggal_produksi');
            $table->integer('hasil_produksi');
            $table->string('status')->default('on schedule');
            $table->text('keterangan')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_monitorings');
    }
};
