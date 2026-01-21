@extends('layouts.index')
@section('title','')

@section('content')

<div class="mx-4 md:mx-10">
    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <!-- Title -->
        <h2 class="text-xl font-bold text-purple-700 mb-6">
            Buat Hasil Monitoring Hari ini?
        </h2>

        <!-- Form -->
        <form method="POST" action="#">
            @csrf

            <!-- Kode Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Kode Mesin
                </label>
                <select name="kode_mesin"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>MC-001</option>
                    <option>MC-002</option>
                    <option>MC-003</option>
                </select>
            </div>

            <!-- Tipe Mesin -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Tipe Mesin
                </label>
                <select name="tipe_mesin"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>NISSEI</option>
                    <option>HAITIAN</option>
                    <option>SUMITOMO</option>
                </select>
            </div>

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nama Produk
                </label>
                <select name="nama_produk"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>Penggaris 30 CM</option>
                    <option>Tutup Botol</option>
                    <option>Tempat Pensil</option>
                </select>
            </div>

            <!-- Operator -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Operator
                </label>
                <input type="text" name="operator" placeholder="Sukiyo"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <!-- Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Mulai
                    </label>
                    <input type="date" name="tanggal_mulai"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tanggal Selesai
                    </label>
                    <input type="date" name="tanggal_selesai"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                </div>
            </div>

            <!-- Shift -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Shift
                </label>
                <select name="shift"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>Pagi</option>
                    <option>Siang</option>
                    <option>Malam</option>
                </select>
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Status
                </label>
                <select name="status"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                    <option>Produksi</option>
                    <option>Setup</option>
                    <option>Maintenance</option>
                    <option>Trouble</option>
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
