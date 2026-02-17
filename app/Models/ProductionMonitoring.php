<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionMonitoring extends Model
{
    use HasFactory;

    protected $fillable = [
        'production_schedule_id',
        'tanggal_produksi',
        'shift',
        'hasil_produksi',
        'status',
        'keterangan'
    ];

    public function jadwal()
    {
        return $this->belongsTo(ProductionSchedule::class, 'production_schedule_id');
    }
}