<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // tampilkan daftar produk
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin_planning') {
            $produks = Produk::all();
        } else {
            $produks = Produk::where('target_produksi', '>', 0)->get();
        }

        // ✅ arahkan ke FE kamu
        return view('pages.produksi', compact('produks', 'user'));
    }

    // form tambah produk
    public function create()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        return view('pages.from-create-produksi');
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

        return view('pages.from-edit-produksi', compact('produk'));
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