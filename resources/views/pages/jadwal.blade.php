@extends('layouts.index')
@section('title','')
@section('content')
<div class="mx-4 md:mx-10">

    <!-- Card -->
    <div class="bg-white shadow-lg rounded-xl p-6">

        <!-- Card Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-700">
                Jadwal Produksi
            </h2>
            @if(auth()->user()->role == 'admin_planning')
            <a href="{{ route('jadwal_produksi.create') }}"
                class="bg-purple-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                + Tambah Jadwal
            </a>
            @endif
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl shadow overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-purple-100 ">
                    <tr>
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Mesin</th>
                        <th class="py-3 px-4 text-left">Tanggal Mulai</th>
                        <th class="py-3 px-4 text-left">Tanggal Selesai</th>
                        <th class="py-3 px-4 text-left">Shift</th>
                        @if(auth()->user()->role == 'admin_planning')
                        <th class="py-3 px-4 text-left">Aksi</th>
                        @endif
                    </tr>
                </thead>

                <tbody class="text-gray-700 text-sm">
                    @foreach ($jadwal as $item)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $item->produk->nama_produk ?? '-' }}</td>
                            <td class="py-3 px-4">{{ $item->mesin->nama_mesin ?? '-' }}</td>
                            <td class="py-3 px-4">{{ $item->tanggal_mulai }}</td>
                            <td class="py-3 px-4">{{ $item->tanggal_selesai }}</td>
                            <td class="py-3 px-4">{{ $item->shift }}</td>
                            @if(auth()->user()->role == 'admin_planning')
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <a href="{{ route('jadwal_produksi.edit', $item->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                    <form action="{{ route('jadwal_produksi.destroy', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                                    </form>
                                </div>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection