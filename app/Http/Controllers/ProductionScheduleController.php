<?php

namespace App\Http\Controllers;

use App\Models\ProductionSchedule;
use App\Models\Mesin;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProductionScheduleController extends Controller
{
    public function index()
    {
        $schedules = ProductionSchedule::with(['mesin', 'produk'])->get();
        return view('jadwal_produksi.index', compact('schedules'));
    }

    public function create ()
    {
        $mesins = Mesin::all();
        $produks = Produk::all();
        return view('jadwal_produksi.create', compact('mesins', 'produks'));
    }

    public function store(Request $request)
    {
        ProductionSchedule::create($request->all());
        return redirect()->route('jadwal_produksi.index');
    }

    public function edit ($id) 
    {
        $jadwal = ProductionSchedule::findOrFail($id);
        return view('jadwal_produksi.edit', compact('jadwal'));
    }

    public function update (Request $request, $id)
    {
        $jadwal = ProductionSchedule::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route ('jadwal_produksi.index');
    }

    public function destroy ($id)
    {
        $jadwal = ProductionSchedule::findOrFail($id);
        $jadwal->delete();

        return redirect()
            ->route('jadwal_produksi.index')
            ->with('success', 'Jadwal produksi berhasil dihapus.');
    }
}