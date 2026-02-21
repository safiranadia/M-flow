<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesin;
use Illuminate\Support\Facades\Auth;

class MesinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // GET: mesin list (view + json optional)
public function index(Request $request)
{
    $user = Auth::user();
    $search = $request->search;

    // Query dasar berdasarkan role
    $query = ($user->role === 'admin_planning')
        ? Mesin::query()
        : Mesin::where('status_mesin', 'aktif');

    // FILTER SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('nama_mesin', 'like', '%' . $search . '%')
              ->orWhere('tipe_mesin', 'like', '%' . $search . '%')
              ->orWhere('lokasi', 'like', '%' . $search . '%')
              ->orWhere('status_mesin', 'like', '%' . $search . '%');
        });
    }

    $mesins = $query->orderBy('nama_mesin')->get();

    // kalau FE minta json
    if ($request->wantsJson()) {
        return response()->json([
            'status' => true,
            'data' => $mesins
        ]);
    }

    return view('pages.mesin', compact('mesins', 'user'));
}


    // GET: detail mesin
    public function show(Request $request, $id)
    {
        $mesin = Mesin::findOrFail($id);

        if ($request->wantsJson()) {
            return response()->json([
                'status' => true,
                'data' => $mesin
            ]);
        }

        return view('pages.detail-mesin', compact('mesin'));
    }

    public function create()
    {
        $this->authorizeAdmin();

        return view('pages.from-create-mesin');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $request->validate([
            'nama_mesin' => 'required|string|max:255',
            'tipe_mesin' => 'nullable|string|max:255',
            'status_mesin' => 'required|in:aktif,maintenance,nonaktif',
            'lokasi' => 'nullable|string|max:255',
        ]);

        Mesin::create($request->all());

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->authorizeAdmin();

        $mesin = Mesin::findOrFail($id);

        return view('pages.from-edit-mesin', compact('mesin'));
    }

    public function update(Request $request, $id)
    {
        $this->authorizeAdmin();

        $request->validate([
            'nama_mesin' => 'required|string|max:255',
            'tipe_mesin' => 'nullable|string|max:255',
            'status_mesin' => 'required|in:aktif,maintenance,nonaktif',
            'lokasi' => 'nullable|string|max:255',
        ]);

        $mesin = Mesin::findOrFail($id);
        $mesin->update($request->all());

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil diupdate.');
    }

    public function destroy($id)
    {
        $this->authorizeAdmin();

        $mesin = Mesin::findOrFail($id);
        $mesin->delete();

        return redirect()->route('mesin.index')->with('success', 'Mesin berhasil dihapus.');
    }

    private function authorizeAdmin()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }
    }
}