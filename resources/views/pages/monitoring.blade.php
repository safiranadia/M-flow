@extends('layouts.index')
@section('title', '')
@section('content')

    <div class="mx-4 md:mx-10">

        <!-- Card -->
        <div class="bg-white shadow-lg rounded-xl p-6">

            <!-- Card Header -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-700">
                    Monitoring Produksi
                </h2>

                <a href="{{ route('monitoring.create') }}"
                    class="bg-purple-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                    + Tambah Monitoring
                </a>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-purple-100">
                        <tr>
                            <th class="p-4 text-left">Produk</th>
                            <th class="p-4 text-left">Mesin</th>
                            <th class="p-4 text-left">Tanggal Produksi</th>
                            <th class="p-4 text-left">Hasil Produksi</th>
                            <th class="p-4 text-left">Shift</th>
                            <th class="p-4 text-left">Status</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        @foreach ($monitorings as $monitoring)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    {{ $monitoring->jadwal->produk->nama_produk ?? '-' }}
                                </td>

                                <td class="py-3 px-4">
                                    {{ $monitoring->jadwal->mesin->nama_mesin ?? '-' }}
                                </td>

                                <td class="py-3 px-4">
                                    {{ $monitoring->tanggal_produksi }}
                                </td>

                                <td class="py-3 px-4">
                                    {{ $monitoring->hasil_produksi }}
                                </td>
                                
                                <td class="py-3 px-4">
                                    Shift {{ $monitoring->jadwal->shift ?? '-'   }}
                                </td>

                                <td class="py-3 px-4">
                                    <form action="{{ route('monitoring.update', $monitoring->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <select name="status" onchange="this.form.submit()"
                                            class="px-3 py-1 rounded-full text-xs border-0 
                                            @if ($monitoring->status == 'Proses') bg-yellow-100 text-yellow-700
                                            @elseif($monitoring->status == 'Selesai') bg-green-100 text-green-700
                                            @else bg-red-100 text-red-700 @endif">

                                            <option value="Proses" {{ $monitoring->status == 'Proses' ? 'selected' : '' }}>
                                                Proses
                                            </option>

                                            <option value="Selesai"
                                                {{ $monitoring->status == 'Selesai' ? 'selected' : '' }}>
                                                Selesai
                                            </option>

                                            <option value="Gagal" {{ $monitoring->status == 'Gagal' ? 'selected' : '' }}>
                                                Gagal
                                            </option>

                                        </select>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
