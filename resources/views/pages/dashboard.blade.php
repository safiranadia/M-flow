@extends('layouts.index')
@section('title', '')
@section('content')

<!-- CARD RINGKASAN -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Total Operator</p>
        <h2 class="text-3xl font-bold text-purple-700 mt-2">12</h2>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Total Produksi Hari Ini</p>
        <h2 class="text-3xl font-bold text-green-600 mt-2">5</h2>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Produk Baru</p>
        <h2 class="text-3xl font-bold text-blue-600 mt-2">3</h2>
    </div>


</div>

<!-- TABEL MESIN AKTIF -->
<div class="bg-white rounded-lg shadow-md mb-6">
    <div class="p-4 border-b font-bold text-purple-700">
        Mesin Aktif Hari Ini
    </div>

    <table class="w-full text-sm text-left">
        <thead class="bg-purple-50">
            <tr>
                <th class="p-4">Kode Mesin</th>
                <th class="p-4">Nama Produk</th>
                <th class="p-4">Jumlah Target</th>
                <th class="p-4">Status</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                        Aktif
                    </span>
                </td>
            </tr>

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-black-700 text-xs">
                        Maintenance
                    </span>
                </td>
            </tr>

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-red-100 text-black-700 text-xs">
                        Trouble
                    </span>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<!-- PROFILE CARD -->
<div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-6">
    <div class="w-20 h-20 rounded-full bg-purple-600 flex items-center justify-center text-white text-2xl font-bold">
        MF
    </div>
    <div>
        <h3 class="text-xl font-bold text-purple-700">Admin MachineFlow</h3>
        <p class="text-gray-500">Administrator</p>
    </div>
</div>

@endsection
