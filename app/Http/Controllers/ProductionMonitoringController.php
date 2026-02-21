<?php

namespace App\Http\Controllers;

use App\Models\ProductionMonitoring;
use App\Models\ProductionSchedule;
use Illuminate\Http\Request;

class ProductionMonitoringController extends Controller
{
    public function index()
    {
        $monitorings = ProductionMonitoring::with([
            'jadwal.mesin',
            'jadwal.produk'
        ])->orderBy('tanggal_produksi', 'desc')
        ->get();
        return view('pages.monitoring', compact('monitorings'));
    }

    public function create()
    {
        $jadwals = ProductionSchedule::wheredoesntHave('monitoring')
            ->with(['mesin', 'produk'])
            ->get();
        return view('pages.from-create-monitoring', compact('jadwals'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'production_schedule_id' => 'required|exists:production_schedules,id',
        'tanggal_produksi' => 'required|date',
        'hasil_produksi' => 'required|integer',
        'status' => 'required|string',
    ]);
    
    $cek = ProductionMonitoring::where('production_schedule_id', $request->production_schedule_id)
        ->first();
        if ($cek) {
            return redirect()->route('monitoring.index')
            ->with('error', 'Monitoring untuk jadwal ini sudah ada!');
        }
        
        ProductionMonitoring::create([
        'production_schedule_id' => $request->production_schedule_id,
        'tanggal_produksi' => $request->tanggal_produksi,
        'hasil_produksi' => $request->hasil_produksi,
        'shift' => $request->shift,
        'status' => $request->status,
        ]);
        
        return redirect()->route('monitoring.index')
        ->with('success', 'Monitoring berhasil disimpan');
}


    public function edit($id)
    {
        $monitorings = ProductionMonitoring::findOrFail($id);
        $jadwals = ProductionSchedule::all();
        return view('pages.monitoring_edit', compact('monitorings', 'jadwals'));
    }

    public function update(Request $request, $id)
{
    $monitoring = ProductionMonitoring::findOrFail($id);

    $monitoring->update([
        'status' => $request->status
    ]);

    return redirect()->route('monitoring.index');
}

}