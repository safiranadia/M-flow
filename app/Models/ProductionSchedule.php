<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesin_id',
        'produk_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'shift',
        'status'
    ];
}