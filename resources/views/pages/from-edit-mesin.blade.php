@extends('layouts.index')

@section('content')

<h2 class="text-xl font-bold mb-4">Edit Mesin</h2>

<form method="POST" action="{{ route('mesin.update', $mesin->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Mesin</label>
        <input type="text" name="nama_mesin" value="{{ $mesin->nama_mesin }}" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Tipe Mesin</label>
        <input type="text" name="tipe_mesin" value="{{ $mesin->tipe_mesin }}" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status_mesin" class="w-full border p-2">
            <option value="aktif" {{ $mesin->status_mesin=='aktif'?'selected':'' }}>Aktif</option>
            <option value="maintenance" {{ $mesin->status_mesin=='maintenance'?'selected':'' }}>Maintenance</option>
            <option value="nonaktif" {{ $mesin->status_mesin=='nonaktif'?'selected':'' }}>Nonaktif</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="lokasi" value="{{ $mesin->lokasi }}" class="w-full border p-2">
    </div>

    <button class="px-4 py-2 bg-purple-600 text-white rounded">Update</button>

</form>

@endsection