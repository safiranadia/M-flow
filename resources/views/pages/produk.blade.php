@extends('layouts.index') 
@section('title','Data Produk')
@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-700">Data Produk</h2>

    @if(auth()->user()->role === 'admin_planning')
    <a href="{{ route('produk.create') }}" 
       class="bg-purple-600 text-white px-5 py-2 rounded-lg hover:bg-purple-700">
        + Tambah Produk
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
                <th class="p-4 text-left">Nama Produk</th>
                <th class="p-4 text-left">Spesifikasi</th>
                <th class="p-4 text-left">Target Produksi</th>
                <th class="p-4 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @forelse ($produks as $produk)
            <tr class="hover:bg-gray-50">
                <td class="p-4">{{ $produk->nama_produk }}</td>
                <td class="p-4">{{ $produk->spesifikasi ?? '-' }}</td>
                <td class="p-4">
                    {{ number_format($produk->target_produksi ?? 0) }}
                </td>

                <td class="p-4">
                    @if(auth()->user()->role === 'admin_planning')
                    <div class="flex gap-2">
                        <a href="{{ route('produk.edit', $produk->id) }}" 
                           class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>

                        <form action="{{ route('produk.destroy', $produk->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                                Delete
                            </button>
                        </form>
                    </div>
                    @else
                        <span class="text-gray-400 text-xs">-</span>
                    @endif
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="4" class="p-4 text-center text-gray-500">
                    Data produk tidak ditemukan
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection