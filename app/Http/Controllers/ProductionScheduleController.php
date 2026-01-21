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
}