@extends('layouts.index') 
@section('title', 'Dashboard') 
@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Total Operator</p>
        <h2 class="text-3xl font-bold text-purple-700 mt-2"></h2>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Total Produksi</p>
        <h2 class="text-3xl font-bold text-green-600 mt-2"></h2>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">New Orders</p>
        <h2 class="text-3xl font-bold text-blue-600 mt-2"></h2>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-sm text-gray-500">Mesin Trouble</p>
        <h2 class="text-3xl font-bold text-red-500 mt-2"></h2>
    </div>
</div>

<div class="bg-white rounded-lg shadow-md">
    <div class="p-4 border-b font-bold text-purple-700">Mesin Aktif</div>
    <table class="w-full text-left">
        <thead class="bg-purple-50">
            <tr>
                <th class="p-4">Nama</th>
                <th class="p-4">Time</th>
                <th class="p-4">Produksi</th>
                <th class="p-4">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t">
                <td class="p-4">John Doe</td>
                <td class="p-4">john@example.com</td>
                <td class="p-4">Admin</td>
                <td class="p-4 text-green-600 font-bold">Active</td>
            </tr>
            <tr class="border-t">
                <td class="p-4">Jane Smith</td>
                <td class="p-4">jane@example.com</td>
                <td class="p-4">Editor</td>
                <td class="p-4 text-yellow-500 font-bold">Pending</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="bg-white p-6 rounded-lg shadow-md flex items-center gap-6">
    <img
        src="https://i.pravatar.cc/100"
        alt="Profile"
        class="w-20 h-20 rounded-full shadow" />
    <div>
        <h3 class="text-xl font-bold text-purple-700">Sophia Ray</h3>
        <p class="text-gray-500">Administrator</p>
        <button
            class="mt-2 bg-purple-600 text-white px-4 py-2 rounded-lg shadow hover:bg-purple-700">
            Edit Profile
        </button>
    </div>
</div>
@endsection