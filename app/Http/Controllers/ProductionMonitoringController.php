<?php

namespace App\Http\Controllers;

use App\Models\ProductionMonitoring;
use App\Models\ProductionSchedule;
use Illuminate\Http\Request;

class ProductionMonitoringController extends Controller
{
    public function index()
    {
        $monitorings = ProductionMonitoring::with('jadwal')->latest()->get();
        return view('monitoring.index', compact('monitorings'));
    }

    public function create()
    {
        $jadwals = ProductionSchedule::all();
        return view('monitoring.create', compact('jadwals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'production_schedule_id' => 'required',
            'tanggal_produksi' => 'required|date',
            'hasil_produksi' => 'required|integer',
        ]);

        ProductionMonitoring::create($request->all());
        return redirect()->route('monitoring.index')
            ->with('success', 'Data Mnitoring produksi berhasil disimpan');
    }

    public function edit($id)
    {
        $monitorings = ProductionMonitoring::findOrFail($id);
        $jadwals = ProductionSchedule::all();
        return view('monitoring.edit', compact('monitorings', 'jadwals'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hasil_produksi' => 'required|integer',
            'status' => 'required|string',
        ]);

        $monitorings = ProductionMonitoring::findOrFail($id);
        $monitorings->update([
            'hasil_produksi' => $request->hasil_produksi,
            'status' => $request->status
        ]);

        return redirect()->route('monitoring.index')
            ->with('success', 'Data Monitoring & status berhasil diperbarui');
    }
}