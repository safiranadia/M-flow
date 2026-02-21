@extends('layouts.index')
@section('title','Data Mesin')
@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-700">Data Mesin</h2>

    @if(auth()->user()->role === 'admin_planning')
    <a href="{{ route('mesin.create') }}" 
       class="bg-purple-600 text-white px-5 py-2 rounded-lg hover:bg-purple-700">
        + Tambah Mesin
    </a>
    @endif
</div>

@if(session('success'))
<div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-purple-100">
            <tr>
                <th class="p-4 text-left">Nama Mesin</th>
                <th class="p-4 text-left">Tipe Mesin</th>
                <th class="p-4 text-left">Lokasi</th>
                <th class="p-4 text-left">Status</th>
                <th class="p-4 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @forelse ($mesins as $mesin)
            <tr class="hover:bg-gray-50">
                <td class="p-4">{{ $mesin->nama_mesin }}</td>
                <td class="p-4">{{ $mesin->tipe_mesin ?? '-' }}</td>
                <td class="p-4">{{ $mesin->lokasi ?? '-' }}</td>

                <td class="p-4">
                    @if($mesin->status_mesin === 'aktif')
                        <span class="px-3 py-1 rounded-full bg-green-100 text-black text-xs">
                            Aktif
                        </span>
                    @elseif($mesin->status_mesin === 'maintenance')
                        <span class="px-3 py-1 rounded-full bg-yellow-100 text-black text-xs">
                            Maintenance
                        </span>
                    @elseif($mesin->status_mesin === 'nonaktif')
                        <span class="px-3 py-1 rounded-full bg-gray-200 text-black text-xs">
                            Nonaktif
                        </span>
                    @else
                        <span class="px-3 py-1 rounded-full bg-red-100 text-black text-xs">
                            {{ ucfirst($mesin->status_mesin) }}
                        </span>
                    @endif
                </td>

                <td class="p-4">
                    <div class="flex gap-2">

                        @if(auth()->user()->role === 'admin_planning')
                        <a href="{{ route('mesin.edit', $mesin->id) }}" 
                           class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>

                        <form action="{{ route('mesin.destroy', $mesin->id) }}" 
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus mesin ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                                Delete
                            </button>
                        </form>
                        @else
                        <span class="text-gray-500 text-xs">-</span>
                        @endif

                    </div>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="5" class="py-4 text-center text-gray-500">
                    Belum ada data mesin
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

@endsection