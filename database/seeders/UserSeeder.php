<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Admin Planning',
            'email' => 'admin@mf.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin_planning'
        ]);

        User::create([
            'nama' => 'Operator Lapangan',
            'email' => 'operator@mf.com',
            'password' => Hash::make('operator123'),
            'role' => 'operator_lapangan'
        ]);
    }
}