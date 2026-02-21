@extends('layouts.index')
@section('title','Edit Produk')
@section('content')

<div class="bg-white p-8 rounded-xl shadow max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold text-purple-600 mb-6">
        Edit Produk
    </h2>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-2">Nama Produk</label>
            <input type="text"
                   name="nama_produk"
                   value="{{ old('nama_produk', $produk->nama_produk) }}"
                   class="w-full border rounded-lg p-3"
                   required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">Spesifikasi</label>
            <textarea name="spesifikasi"
                      class="w-full border rounded-lg p-3">{{ old('spesifikasi', $produk->spesifikasi) }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block font-semibold mb-2">Target Produksi</label>
            <input type="number"
                   name="target_produksi"
                   value="{{ old('target_produksi', $produk->target_produksi) }}"
                   class="w-full border rounded-lg p-3"
                   required>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('produk.index') }}"
               class="px-5 py-2 bg-gray-300 rounded-lg">
                Batal
            </a>

            <button type="submit"
                    class="px-5 py-2 bg-purple-600 text-white rounded-lg">
                Update
            </button>
        </div>
    </form>
</div>

@endsection