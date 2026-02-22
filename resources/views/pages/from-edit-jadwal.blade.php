@extends('layouts.index')
@section('title','')
@section('content')

<div class="mx-4 md:mx-10">
    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <!-- Title -->
        <h2 class="text-xl font-bold text-purple-700 mb-6">
            Edit Rencana Produksi
        </h2>

        <!-- Form -->
        <form action="{{ route('jadwal_produksi.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <select name="produk_id" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    @foreach($produk as $item)
                        <option value="{{ $item->id }}" {{ $jadwal->produk_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_produk }}
                        </option>
                    @endforeach
                </select>

            <!-- Nama_mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Mesin
                </label>
                <select 
                    name="mesin_id"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    @foreach($mesin as $item)
                        <option value="{{ $item->id }}" {{ $jadwal->mesin_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_mesin }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Mulai
                    </label>
                    <input 
                        type="date" 
                        name="tanggal_mulai"
                        value=""
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Selesai
                    </label>
                    <input 
                        type="date" 
                        name="tanggal_selesai"
                        value=""
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>
            </div>

            <!-- Shift -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Shift
                </label>
                <select 
                    name="shift"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option value="1" {{ $jadwal->shift == 1 ? 'selected' : '' }}>Shift 1</option>
                    <option value="2" {{ $jadwal->shift == 2 ? 'selected' : '' }}>Shift 2</option>
                    <option value="3" {{ $jadwal->shift == 3 ? 'selected' : '' }}>Shift 3</option>
                </select>
            </div>

            <!-- Button -->
            <div class="flex justify-end gap-3">
                <a href=""
                    class="px-4 py-2 rounded-lg border text-gray-600 hover:bg-gray-100">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 rounded-lg bg-purple-600 text-white hover:bg-purple-700">
                    Update
                </button>
            </div>

        </form>

    </div>
</div>

@endsection