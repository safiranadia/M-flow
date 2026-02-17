@extends('layouts.index')

@section('content')

<div class="mx-4 md:mx-10">
    
    <!-- Card -->
    <div class="bg-white shadow-lg rounded-xl p-6">

        <!-- Card Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                Laporan Produksi
            </h2>
        </div>
        
        {{-- FILTER --}}
        <form method="GET" action="{{ route('laporan.produksi.index') }}" class="flex gap-4 mb-6">
            <input type="date" 
               name="tanggal" 
               value="{{ request('tanggal') }}"
               class="border rounded px-3 py-2">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Filter
        </button>

        {{-- Tombol Download --}}
        <a href="{{ route('laporan.produksi.download', ['tanggal' => request('tanggal')]) }}"
           class="bg-purple-600 text-white px-4 py-2 rounded">
            Download PDF
        </a>
        </form>


        {{-- TABEL --}}
        <div class="bg-white shadow rounded overflow-x-auto">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">Mesin</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Shift</th>
                        <th class="px-4 py-3">Hasil Produksi</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($monitorings as $m)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $m->jadwal->mesin->nama_mesin ?? '-' }}</td>
                        <td class="px-4 py-3"> {{ $m->tanggal_produksi }}</td>
                        <td class="px-4 py-3">Shift {{ $m->jadwal->shift ?? '-' }}</td>
                         <td class="px-4 py-3">{{ $m->hasil_produksi }}</td>
                         <td class="px-4 py-3">{{ $m->status }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            Tidak ada data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>    
    </div>
</div>
@endsection
