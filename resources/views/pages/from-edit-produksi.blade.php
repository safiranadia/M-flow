@extends('layouts.index')
@section('title','')
@section('content')

<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow p-6">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-purple-700 mb-6">
            Edit Produksi
        </h2>

        <form>

            <!-- Kode Produksi -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kode Produksi
                </label>
                <input 
                    type="text" 
                    value="PRD-001"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <input 
                    type="text" 
                    value="Penggaris 30CM"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Kode Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kode Mesin
                </label>
                <select
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>MC-001</option>
                    <option selected>MC-002</option>
                    <option>MC-003</option>
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
                        value="2026-01-10"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Selesai
                    </label>
                    <input 
                        type="date" 
                        value="2026-01-15"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>
            </div>

            <!-- Jumlah Target -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Jumlah Target
                </label>
                <input 
                    type="number" 
                    value="500"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Status Produksi
                </label>
                <select
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>Terjadwal</option>
                    <option selected>Berjalan</option>
                    <option>Selesai</option>
                </select>
            </div>

            <!-- Button -->
            <div class="flex justify-end gap-3">
                <a href="#"
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
