@extends('layouts.index')
@section('title','')
@section('content')

<div class="mx-4 md:mx-10">
    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <!-- Title -->
        <h2 class="text-xl font-bold text-purple-700 mb-6">
            Tambah Rencana Produksi
        </h2>

        <!-- Form -->
        <form>

            <!-- Kode Produksi -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kode Produksi
                </label>
                <input type="text" placeholder="PRD-001"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <input type="text" placeholder="Penggaris 30CM"
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
                    <option>MC-002</option>
                    <option>MC-003</option>
                </select>
            </div>

            <!-- Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Mulai
                    </label>
                    <input type="date"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Selesai
                    </label>
                    <input type="date"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>
            </div>

            <!-- Operator -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Operator
                </label>
                <input type="text" placeholder="Sukiyo"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Shift -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Shift
                </label>
                <select
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>Pagi</option>
                    <option>Sore</option>
                    <option>Malam</option>
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
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>

@endsection
