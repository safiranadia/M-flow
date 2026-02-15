@extends('layouts.index')
@section('title','')
@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-700"></h2>
    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
        + Tambah Produk
    </button>
</div>
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full text-sm">
        <thead class="bg-purple-100">
            <tr>
                <th class="p-4 text-left">Kode Produk</th>
                <th class="p-4 text-left">Nama Produk</th>
                <th class="p-4 text-left">Kode Mesin</th>
                <th class="p-4 text-left">Tanggal mulai</th>
                <th class="p-4 text-left">Tanggal selesai</th>
                <th class="p-4 text-left">Jumlah Target</th>
                <th class="p-4 text-left">Status</th>
                <th class="p-4 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-black-700 text-xs">
                    Terjadwal
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                    Berjalan
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


            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-black-700 text-xs">
                    Selesai
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-black-700 text-xs">
                    Terjadwal
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                    Berjalan
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-black-700 text-xs">
                    Selesai
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-black-700 text-xs">
                    Terjadwal
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                    Berjalan
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


            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-black-700 text-xs">
                    Selesai
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-black-700 text-xs">
                    Terjadwal
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

            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-green-100 text-black-700 text-xs">
                    Berjalan
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


            <tr class="border-t hover:bg-gray-50">
                <td class="p-4">PRD-001</td>
                <td class="p-4">Penggaris 30CM</td>
                <td class="p-4">Mc-001</td>
                <td class="p-4">12-02-2025</td>
                <td class="p-4">12-12-2025</td>
                <td class="p-4">500 unit</td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-black-700 text-xs">
                    Selesai
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