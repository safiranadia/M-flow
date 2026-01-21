@extends('layouts.index')
@section('title','')
@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-700"></h2>
    <button class="bg-purple-600 text-white px-5 py-2 rounded-lg hover:bg-purple-700">
        + Tambah Mesin
    </button>
</div>

<div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-purple-100">
            <tr>
                <th class="p-4 text-left">Kode Mesin</th>
                <th class="p-4 text-left">Tipe Mesin</th>
                <th class="p-4 text-left">Nama Produk</th>
                <th class="p-4 text-left">Kapasitas</th>
                <th class="p-4 text-left">Status</th>
                <th class="p-4 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                        Aktif
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-black-700 text-xs">
                        Maintenance
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-red-100 text-black-700 text-xs">
                        Trouble
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-red-100 text-black-700 text-xs">
                        Trouble
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-red-100 text-black-700 text-xs">
                        Trouble
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                        Aktif
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                        Aktif
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="p-4">Mc-001</td>
                <td class="p-4">NISSEI</td>
                <td class="py-3 px-4">Penggaris 30CM</td>
                <td class="p-4">500 ton</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-black-700 text-xs">
                        Maintenance
                    </span>
                </td>
                <td class="py-3 px-4">
                    <div class="flex gap-2">
                        <a href="#" class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs hover:bg-blue-200">
                            Edit
                        </a>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs hover:bg-red-200">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection