@extends('layouts.index')
@section('title','Create Monitoring')

@section('content')

<div class="mx-4 md:mx-10">
    <div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto">

        <h2 class="text-xl font-bold text-purple-700 mb-6">
            Input Monitoring Produksi
        </h2>

        {{-- ERROR VALIDATION --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('monitoring.store') }}">
            @csrf

            {{-- PILIH JADWAL --}}
            <div class="mb-4">
                <label class="block mb-2">Jadwal Produksi</label>
                <select name="production_schedule_id" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Jadwal --</option>
                    @foreach($jadwals as $jadwal)
                        <option value="{{ $jadwal->id }}">
                            {{ $jadwal->produk->nama_produk }} - 
                            {{ $jadwal->mesin->nama_mesin }} 
                            ({{ $jadwal->tanggal_mulai }})
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- TANGGAL PRODUKSI --}}
            <div class="mb-4">
                <label class="block mb-2">Tanggal Produksi</label>
                <input type="date" name="tanggal_produksi"
                    class="w-full border rounded px-3 py-2" required>
            </div>

            {{-- HASIL PRODUKSI --}}
            <div class="mb-4">
                <label class="block mb-2">Hasil Produksi</label>
                <input type="number" name="hasil_produksi"
                    class="w-full border rounded px-3 py-2"
                    placeholder="Masukkan jumlah hasil" required>
            </div>

            {{-- SHIFT --}}
            <div class="mb-4">
                <label class="block mb-2">Shift</label>
                <select name="shift" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Shift --</option>
                    <option value="1">Shift 1 (Pagi)</option>
                    <option value="2">Shift 2 (Siang)</option>
                    <option value="3">Shift 3 (Malam)</option>
                </select>
            </div> 

            {{-- STATUS --}}
            <div class="mb-4">
                <label class="block mb-2">Status</label>
                <select name="status" class="w-full border rounded px-3 py-2" required>
                    <option value="on schedule">On Schedule</option>
                    <option value="delay">Delay</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-purple-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>

@endsection
