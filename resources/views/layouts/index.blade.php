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


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 12l9-9 9 9M4 10v10h6v-6h4v6h6V10" />
          </svg>
          Dashboard
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17v-6h13v6M3 17h6V7H3v10z" />
          </svg>
          Produksi
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
          </svg>
          Jadwal
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 13h16v8H4zM6 13V7h6v6M14 7h6M17 4v6" />
          </svg>
          Mesin
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 12v8m6-12v12m6-6v6m6-10v10" />
          </svg>
          Monitoring
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17v-2h6v2m-6-6h6m2 10H7a2 2 0 01-2-2V5h10l4 4v10a2 2 0 01-2 2z" />
          </svg>
          Laporan
        </a>


        <a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-700 hover:bg-purple-100">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
          </svg>
          Logout
        </a>
      </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

      <!-- TOP NAVBAR -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-purple-700">@yield('title')</h1>
        <div class="flex items-center gap-4">
          <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-lg">
          <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold">
            AD
          </div>
        </div>
      </header>

      <!-- CONTENT -->
      <main class="p-6 space-y-6">
        @yield('content')
      </main>

      <!-- FOOTER -->
      <footer class="bg-white p-4 text-center text-sm text-gray-400 border-t">
        © 2025 MachineFlow. All rights reserved.
      </footer>

    </div>
  </div>
</body>

</html>