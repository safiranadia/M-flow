@extends('layouts.index')
@section('title','Tambah Rencana Produksi')
@section('content')

<div class="mx-4 md:mx-10">
    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <!-- Title -->
        <h2 class="text-xl font-bold text-purple-700 mb-6">
            Buat Jadwal Produksi Hari ini?
        </h2>

        <!-- Form -->
        <form action="{{ route('jadwal_produksi.store') }}" method="POST">
            @csrf

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <select name="produk_id" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    @foreach($produks as $produk)
                        <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Kode Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Mesin
                </label>
                <select name="mesin_id" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    @foreach($mesins as $mesin)
                        <option value="{{ $mesin->id }}">{{ $mesin->nama_mesin }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal Mulai -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Mulai
                    </label>
                    <input type="date" name="tanggal_mulai" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Selesai
                    </label>
                    <input type="date" name="tanggal_selesai" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>
            </div>

            <!-- Shift -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Shift
                </label>
                <select name="shift" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option value="1">Shift 1</option>
                    <option value="2">Shift 2</option>
                    <option value="3">Shift 3</option>
                </select>
            </div>

            <!-- Button -->
            <div class="flex justify-end gap-3">
                <a href="{{ route('jadwal_produksi.index') }}"
                    class="px-4 py-2 rounded-lg border text-gray-600 hover:bg-gray-100">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 rounded-lg bg-purple-600 text-white hover:bg-purple-700">
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>

@endsection