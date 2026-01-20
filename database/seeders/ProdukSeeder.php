<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Baut M10',
            'spesifikasi' => 'Bahan baja karbon tinggi',
            'target_produksi' => 5000,
        ]);

        Produk::create([
            'nama_produk' => 'Bracket L',
            'spesifikasi' => 'Material stainless steel',
            'target_produksi' => 2500,
        ]);

        Produk::create([
            'nama_produk' => 'Cover Housing',
            'spesifikasi' => 'Injection mould plastic',
            'target_produksi' => 1000,
        ]);

        // produk baru (target 0)
        Produk::create([
            'nama_produk' => 'Produk Baru',
            'spesifikasi' => 'Belum ada spesifikasi',
            'target_produksi' => 0,
        ]);
    }
}