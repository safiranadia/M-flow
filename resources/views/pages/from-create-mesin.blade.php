@extends('layouts.index')

@section('content')

<h2 class="text-xl font-bold mb-4">Tambah Mesin</h2>

<form method="POST" action="{{ route('mesin.store') }}">
    @csrf

    <div class="mb-3">
        <label>Nama Mesin</label>
        <input type="text" name="nama_mesin" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Tipe Mesin</label>
        <input type="text" name="tipe_mesin" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status_mesin" class="w-full border p-2">
            <option value="aktif">Aktif</option>
            <option value="maintenance">Maintenance</option>
            <option value="nonaktif">Nonaktif</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="lokasi" class="w-full border p-2">
    </div>

    <button class="px-4 py-2 bg-purple-600 text-white rounded">Simpan</button>

</form>

@endsection