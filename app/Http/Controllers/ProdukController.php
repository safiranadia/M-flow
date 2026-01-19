<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // pastikan login dulu
    }

    // tampilkan daftar produk
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin_planning') {
            // admin lihat semua produk
            $produks = Produk::all();
        } else {
            // operator cuma lihat produk yang target produksinya > 0
            $produks = Produk::where('target_produksi', '>', 0)->get();
        }

        return view('produk.index', compact('produks', 'user'));
    }

    // form tambah produk
    public function create()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403); // operator tidak boleh
        }

        return view('produk.create');
    }

    // simpan produk baru
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'target_produksi' => 'nullable|integer',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // form edit produk
    public function edit($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    // update produk
    public function update(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'target_produksi' => 'nullable|integer',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate.');
    }

    // hapus produk
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}