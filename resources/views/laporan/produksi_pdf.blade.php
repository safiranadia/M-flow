<!DOCTYPE html>
<html>
<head>
    <title>Laporan Produksi</title>
    <style>
        body { font-family: sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 5px; text-align: center; }
    </style>
</head>
<body>

<h2>LAPORAN PRODUKSI</h2>

<h4>Rekap Per Shift</h4>
<ul>
    <li>Pagi : {{ $rekap['Pagi'] ?? 0 }}</li>
    <li>Sore : {{ $rekap['Sore'] ?? 0 }}</li>
    <li>Malam : {{ $rekap['Malam'] ?? 0 }}</li>
</ul>

<h4>Total Produksi : {{ $total }}</h4>

<table>
    <tr>
        <th>Produk</th>
        <th>Mesin</th>
        <th>Tanggal</th>
        <th>Shift</th>
        <th>Hasil</th>
        <th>Status</th>
    </tr>

    @foreach($monitorings as $m)
    <tr>
        <td>{{ $m->jadwal->produk->nama_produk ?? '-' }}</td>
        <td>{{ $m->jadwal->mesin->nama_mesin ?? '-' }}</td>
        <td>{{ $m->tanggal_produksi }}</td>
        <td>Shift{{ $m->jadwal->shift }}</td>
        <td>{{ $m->hasil_produksi }}</td>
        <td>{{ $m->status }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
