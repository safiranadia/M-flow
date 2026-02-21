@extends('layouts.index')
@section('title','Tambah Produk')
@section('content')

<div class="bg-white p-8 rounded-xl shadow max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold text-purple-600 mb-6">
        Tambah Produk
    </h2>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        {{-- Nama Produk --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Nama Produk</label>
            <input type="text"
                   name="nama_produk"
                   value="{{ old('nama_produk') }}"
                   class="w-full border rounded-lg p-3 @error('nama_produk') border-red-500 @enderror"
                   required>
            @error('nama_produk')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Spesifikasi --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Spesifikasi</label>
            <textarea name="spesifikasi"
                      class="w-full border rounded-lg p-3">{{ old('spesifikasi') }}</textarea>
        </div>

        {{-- Target Produksi --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">Target Produksi</label>
            <input type="number"
                   name="target_produksi"
                   value="{{ old('target_produksi') }}"
                   class="w-full border rounded-lg p-3 @error('target_produksi') border-red-500 @enderror"
                   required>
            @error('target_produksi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('produk.index') }}"
               class="px-5 py-2 bg-gray-300 rounded-lg">
                Batal
            </a>

            <button type="submit"
                    class="px-5 py-2 bg-purple-600 text-white rounded-lg">
                Simpan
            </button>
        </div>
    </form>
</div>

@endsection