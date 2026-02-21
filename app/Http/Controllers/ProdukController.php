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

    // tampilkan daftar produk + search
    public function index(Request $request)
    {
        $user = Auth::user();
        $search = $request->search;

        $query = Produk::query();

        // Batasi jika bukan admin_planning
        if ($user->role !== 'admin_planning') {
            $query->where('target_produksi', '>', 0);
        }

        // Fitur search
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_produk', 'like', '%' . $search . '%')
                  ->orWhere('spesifikasi', 'like', '%' . $search . '%');
            });
        }

        $produks = $query->get();

        return view('pages.produk', compact('produks', 'user', 'search'));
    }

    // form tambah produk
    public function create()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        return view('pages.from-create-produk');
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

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    // form edit produk
    public function edit($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $produk = Produk::findOrFail($id);

        return view('pages.from-edit-produk', compact('produk'));
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

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil diupdate.');
    }

    // hapus produk
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}