<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>@yield('title')</title>
</head>

<body class="bg-gray-100">
  <div class="flex min-h-screen">

    <aside class="w-64 bg-white shadow-md">
      <div class="p-6 text-2xl font-bold text-purple-700">
        MachineFlow
      </div>

      <nav class="mt-6 text-sm">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('dashboard') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Dashboard
        </a>

        <!-- Produk -->
        <a href="{{ route('produk.index') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('produk.*') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Produk
        </a>

        <!-- Mesin -->
        <a href="{{ route('mesin.index') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('mesin.*') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Mesin
        </a>

        <!-- Jadwal Produksi -->
        <a href="{{ route('jadwal_produksi.index') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('jadwal_produksi.*') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Jadwal Produksi
        </a>

        <!-- Monitoring -->
        <a href="{{ route('monitoring.index') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('monitoring.*') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Monitoring
        </a>

        <!-- Laporan Produksi -->
        <a href="{{ route('laporan.produksi.index') }}"
           class="flex items-center gap-3 px-6 py-3
           {{ request()->routeIs('laporan.produksi.*') 
                ? 'bg-purple-100 text-purple-700 font-semibold border-l-4 border-purple-600'
                : 'text-gray-700 hover:bg-purple-100' }}">
            Laporan Produksi
        </a>

        <!-- Logout -->
        <form action="/logout" method="POST">
            @csrf
            <button type="submit"
                class="w-full text-left flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
                Logout
            </button>
        </form>

      </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

      <!-- TOP NAVBAR -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
          <h1 class="text-xl font-bold text-purple-700">@yield('title')</h1>

          <div class="flex items-center gap-4">
              <form method="GET" action="{{ url()->current() }}">
                  <input type="text"
                         name="search"
                         value="{{ request('search') }}"
                         placeholder="Search..."
                         class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-400">
              </form>
          </div>
      </header>

      <!-- CONTENT -->
      <main class="p-6 space-y-6">
        @yield('content')
      </main>

      <!-- FOOTER -->
      <footer class="bg-white p-4 text-center text-sm text-gray-400 border-t">
        © 2026 MachineFlow. All rights reserved.
      </footer>

    </div>
  </div>
</body>

</html>