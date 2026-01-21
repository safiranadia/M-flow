<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mesin;

class MesinSeeder extends Seeder
{
    public function run(): void
    {
        Mesin::create([
            'nama_mesin' => 'Mesin CNC',
            'tipe_mesin' => 'CNC-450',
            'status_mesin' => 'aktif',
            'lokasi' => 'Workshop A',
        ]);

        Mesin::create([
            'nama_mesin' => 'Mesin Press',
            'tipe_mesin' => 'PRS-220',
            'status_mesin' => 'maintenance',
            'lokasi' => 'Workshop B',
        ]);

        Mesin::create([
            'nama_mesin' => 'Mesin Milling',
            'tipe_mesin' => 'ML-320',
            'status_mesin' => 'nonaktif',
            'lokasi' => 'Workshop C',
        ]);
    }
}