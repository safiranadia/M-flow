<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductionMonitoring;
use App\Models\Mesin;
use App\Models\Produk;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanProduksiController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductionMonitoring::with('jadwal.mesin');
        if ($request->tanggal) {
            $query->whereDate('tanggal_produksi', $request->tanggal);
        }
        $monitorings = $query->get();
        return view('pages.laporan', compact('monitorings'));
    }
     public function download(Request $request)
     {
        $query = ProductionMonitoring::with('jadwal.mesin');
        // Filter Mesin
        if ($request->mesin_id) {
            $query->whereHas('jadwal', function ($q) use ($request) {
                $q->where('mesin_id', $request->mesin_id);
            });
        }

        // Filter Tanggal
        if ($request->tanggal) {
            $query->whereDate('tanggal_produksi', $request->tanggal);
        }
        $monitorings = $query->get();

        // Rekap berdasarkan shift dari jadwal
        $rekap = [
            '1' => $monitorings->filter(fn($m) => optional($m->jadwal)->shift === '1')
                           ->sum('hasil_produksi'),
            '2' => $monitorings->filter(fn($m) => optional($m->jadwal)->shift === '2')
                           ->sum('hasil_produksi'),
            '3' => $monitorings->filter(fn($m) => optional($m->jadwal)->shift === '3')
                            ->sum('hasil_produksi'),
            ];

        $total = $monitorings->sum('hasil_produksi');
        $pdf = Pdf::loadView('laporan.produksi_pdf', compact(
            'monitorings',
            'rekap',
            'total'
        ));
        return $pdf->download('laporan_produksi.pdf');
}

}
