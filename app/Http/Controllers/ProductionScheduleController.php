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
        $jadwal = ProductionSchedule::with(['mesin', 'produk'])->get();
        return view('pages.jadwal', compact('jadwal'));
    }

    public function create ()
    {
        $mesins = Mesin::all();
        $produks = Produk::all();
        return view('pages.from-create-jadwal', compact('mesins', 'produks'));
    }

    public function store(Request $request) 
    {
        ProductionSchedule::create([
            'produk_id' => $request->produk_id,
            'mesin_id' => $request->mesin_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'shift' => $request->shift,
        ]);
        return redirect()->route('jadwal_produksi.index');
    }

    public function edit ($id) 
    {
        $jadwal = ProductionSchedule::findOrFail($id);
        $mesin = Mesin::all();
        $produk = Produk::all();
        return view('pages.from-edit-jadwal', compact('jadwal', 'mesin', 'produk'));
    }

    public function update (Request $request, $id)
    {
        $jadwal = ProductionSchedule::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwal_produksi.index');
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