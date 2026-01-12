<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>@yield('title')</title>
</head>

<body>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
      <div class="p-6 font-bold text-purple-700 text-2xl">MachineFlow</div>
      <nav class="mt-8">
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Dashboard</a>
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Produksi</a>
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Jadwal</a>
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Mesin</a>
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Monitoring</a>
        <a href="#" class="block py-3 px-6 text-gray-700 hover:bg-purple-100">Laporan</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Top Navbar -->
        <header class="bg-white shadow-md p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-purple-700">Dashboard</h1>
            <div class="flex items-center gap-4">
            <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-lg">
            <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold">SR</div>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6 space-y-6">
            @yield('content')
        </main>
    
    <footer class="bg-white p-4 mt-10 text-center text-sm text-gray-400 border-t">
      © 2025 AdminPanel. All rights reserved.
    </footer>
    </div>
</body>

</html>