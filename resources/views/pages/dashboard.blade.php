@extends('layouts.index')
@section('title', '')
@section('content')

<!-- CARD RINGKASAN -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-purple-600 flex items-center justify-center text-white text-lg font-bold">
            P
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Produk</p>
            <h2 class="text-xl font-bold text-purple-700">{{ $totalProduk }}</h2>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-green-600 flex items-center justify-center text-white text-lg font-bold">
            M
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Mesin</p>
            <h2 class="text-xl font-bold text-green-700">{{ $totalMesin }}</h2>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white text-lg font-bold">
            J
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Jadwal</p>
            <h2 class="text-xl font-bold text-blue-700">{{ $totalJadwal }}</h2>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-yellow-600 flex items-center justify-center text-white text-lg font-bold">
            H
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Hasil Produksi Hari Ini</p>
            <h2 class="text-xl font-bold text-yellow-700">{{ $totalHariIni }}</h2>
        </div>
    </div>
</div>

<!-- Jadwal hari ini -->
<div class="bg-white shadow-lg rounded-xl p-6 mt-6">
    <h3 class="text-lg font-bold text-purple-700 mb-4">
        Jadwal Produksi Hari Ini
    </h3>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-purple-100 text-left">
                <th class="p-3">Kode Mesin</th>
                <th class="p-3">Nama Produk</th>
                <th class="p-3">Shift</th>
                <th class="p-3">Periode</th>
            </tr>
        </thead>
        <tbody>
            @forelse($schedules as $schedule)
            <tr class="border-t">
                <td class="p-3">{{ $schedule->mesin->kode_mesin ?? '-' }}</td>
                <td class="p-3">{{ $schedule->produk->nama_produk ?? '-' }}</td>
                <td class="p-3 capitalize">{{ $schedule->shift }}</td>
                <td class="p-3">
                    {{ $schedule->tanggal_mulai }} s/d {{ $schedule->tanggal_selesai }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-3 text-center text-gray-500">
                    Tidak ada jadwal aktif hari ini
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>


@endsection
