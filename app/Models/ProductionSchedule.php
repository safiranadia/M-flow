<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionSchedule extends Model
{
    use HasFactory;

    protected $table = 'production_schedules';

    protected $fillable = [
        'mesin_id',
        'produk_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'shift',
        'status'
    ];

    public function mesin()
    {
        return $this->belongsTo(Mesin::class, 'mesin_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function monitoring()
    {
        return $this->hasOne(ProductionMonitoring::class, 'production_schedule_id');
    }
}