<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesin;
use Illuminate\Support\Facades\Auth;

class MesinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // pastikan login
    }

    // daftar mesin
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin_planning') {
            $mesins = Mesin::all();
        } else {
            $mesins = Mesin::where('status_mesin', 'aktif')->get();
        }

        return view('mesin.index', compact('mesins', 'user'));
    }

    // form tambah mesin
    public function create()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        return view('mesin.create');
    }

    // simpan mesin baru
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $request->validate([
            'nama_mesin' => 'required|string|max:255',
            'tipe_mesin' => 'nullable|string',
            'status_mesin' => 'required|in:aktif,maintenance,nonaktif',
            'lokasi' => 'nullable|string',
        ]);

        Mesin::create($request->all());

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil ditambahkan.');
    }

    // form edit mesin
    public function edit($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $mesin = Mesin::findOrFail($id);
        return view('mesin.edit', compact('mesin'));
    }

    // update mesin
    public function update(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $request->validate([
            'nama_mesin' => 'required|string|max:255',
            'tipe_mesin' => 'nullable|string',
            'status_mesin' => 'required|in:aktif,maintenance,nonaktif',
            'lokasi' => 'nullable|string',
        ]);

        $mesin = Mesin::findOrFail($id);
        $mesin->update($request->all());

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil diupdate.');
    }

    // hapus mesin
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $mesin = Mesin::findOrFail($id);
        $mesin->delete();

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil dihapus.');
    }
}