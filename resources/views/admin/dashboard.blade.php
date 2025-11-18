<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Statistik Card -->
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Pengguna</h3>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">1,234</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Pengaduan</h3>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">56</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Agenda Desa</h3>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">12</p>
                </div>
            </div>
            
            <!-- Section Recent Activity -->
            <div class="mt-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Pengaduan Terbaru</h3>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-2">Pengaduan tentang jalan rusak - <span class="text-gray-500 text-sm">2 jam yang lalu</span></li>
                    <li class="py-2">Laporan sampah menumpuk - <span class="text-gray-500 text-sm">1 hari yang lalu</span></li>
                    <li class="py-2">Keluhan air bersih - <span class="text-gray-500 text-sm">3 hari yang lalu</span></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
