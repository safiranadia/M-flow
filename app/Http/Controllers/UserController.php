<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // harus login
    }

    // daftar user
    public function index()
    {
        $user = Auth::user();

        if ($user->role !== 'admin_planning') {
            abort(403); // operator tidak boleh akses
        }

        $users = User::all();
        return view('users.index', compact('users'));
    }

    // form tambah user
    public function create()
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        return view('users.create');
    }

    // simpan user baru
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', // pastikan ada password_confirmation di form
            'role' => 'required|in:admin_planning,operator_lapangan',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password, // akan otomatis hash di model
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    // form edit user
    public function edit($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $editUser = User::findOrFail($id);
        return view('users.edit', compact('editUser'));
    }

    // update user
    public function update(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $user = User::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'role' => 'required|in:admin_planning,operator_lapangan',
        ]);

        $user->nama = $request->nama;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = $request->password; // otomatis hash di model
        }
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diupdate.');
    }

    // hapus user
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin_planning') {
            abort(403);
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}