@extends('layouts.index')
@section('title','')
@section('content')

<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white rounded-xl shadow p-6">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-purple-700 mb-6">
            Tambah Mesin 
        </h2>

        <form>

            <!-- Kode Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kode Mesin
                </label>
                <input type="text" placeholder="MC-001"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Tipe Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Tipe Mesin
                </label>
                <select
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>NISSEI</option>
                    <option>MITSUBISHI</option>
                    <option>TOYO</option>
                    <option>SUMITOMO</option>
                </select>
            </div>

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <input type="text" placeholder="Penggaris 30CM"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Operator -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Operator
                </label>
                <input type="text" placeholder="Sukiyo"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Kapasitas -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kapasitas Mesin (Ton)
                </label>
                <input type="number" placeholder="500"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Button -->
            <div class="flex justify-end gap-3">
                <a href="#"
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
