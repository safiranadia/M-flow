<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductionSchedule;

class DashboardController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();
        $schedules = ProductionSchedule::with(['mesin', 'produk', 'monitoring', 'monitoring.jadwal.mesin', 'monitoring.jadwal.produk'])
            ->whereDate('tanggal_mulai', '<=', $today)
            ->whereDate('tanggal_selesai', '>=', $today)
            ->get();

        $totalProduk = $schedules->pluck('produk')->unique()->count();
        $totalMesin = $schedules->pluck('mesin')->unique()->count();
        $totalJadwal = $schedules->count();
        $totalHariIni = $schedules->filter(function ($schedule) use ($today) {
            return $schedule->tanggal_mulai <= $today && $schedule->tanggal_selesai >= $today;
        })->count();

        

        return view('pages.dashboard', compact('schedules', 'totalProduk', 'totalMesin', 'totalJadwal', 'totalHariIni'));
    }
}
