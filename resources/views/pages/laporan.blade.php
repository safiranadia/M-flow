@extends('layouts.index')
@section('title','')
@section('content')
<div class="mx-4 md:mx-10">

    <!-- Card -->
    <div class="bg-white shadow-lg rounded-xl p-6">

        <!-- Card Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                
            </h2>

            <a href=""
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                Unduh Laporan
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-purple-100 text-gray-600 text-sm uppercase">
                        <th class="py-3 px-4 text-left">Kode Produksi</th>
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Kode Mesin</th>
                        <th class="py-3 px-4 text-left">Tanggal mulai</th>
                        <th class="py-3 px-4 text-left">Tanggal selsai</th>
                        <th class="py-3 px-4 text-left">Jumlah Target</th>
                        <th class="py-3 px-4 text-left">Operator</th>
                        <th class="py-3 px-4 text-left">Shift</th>
                        <th class="py-3 px-4 text-left">Status</th>


                    </tr>
                </thead>

                <tbody class="text-gray-700 text-sm">
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">PRD-001</td>
                        <td class="py-3 px-4">Penggaris 30CM</td>
                        <td class="py-3 px-4">Mc-001</td>
                        <td class="py-3 px-4">01-02-2026</td>
                        <td class="py-3 px-4">05-02-2026</td>
                        <td class="py-3 px-4">500 unit</td>
                        <td class="py-3 px-4">Sukiyo</td>
                        <td class="py-3 px-4">Pagi</td>
                        <td class="p-4">
                            <span class="px-3 py-1 rounded-full bg-blue-100 text-black-700 text-xs">
                                Selesai
                            </span>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection