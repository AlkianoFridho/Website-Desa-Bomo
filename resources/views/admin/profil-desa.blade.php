<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Profil Desa') }}
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Kelola data profil desa yang ditampilkan ke publik.
                </p>
            </div>

            @if(!$profildesa)
                <a href="{{ route('admin.profil-desa.create') }}"
                   class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-sm">
                    <span>Tambah Profil</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Alert success --}}
            @if(session('success'))
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-emerald-800">
                    <div class="flex items-start gap-3">
                        <div class="mt-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            {{-- Card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="p-6 md:p-8">

                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                Ringkasan Profil Desa
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                Pastikan data singkat, jelas, dan konsisten dengan informasi resmi.
                            </p>
                        </div>

                        @if($profildesa)
                            <a href="{{ route('admin.profil-desa.edit', $profildesa->id) }}"
                               class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-xl shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5M18.5 2.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                </svg>
                                <span>Edit</span>
                            </a>
                        @endif
                    </div>

                    <div class="mt-6">
                        @if ($profildesa)
                            {{-- Info grid --}}
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                @php
                                    $items = [
                                        ['label' => 'Nama Desa', 'value' => $profildesa->nama_desa],
                                        ['label' => 'Kepala Desa', 'value' => $profildesa->kepala_desa],
                                        ['label' => 'Lokasi', 'value' => $profildesa->lokasi],
                                    ];
                                @endphp

                                <div class="rounded-2xl border border-gray-100 dark:border-gray-700 bg-gray-50/60 dark:bg-gray-900/30 p-5">
                                    <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Identitas</p>
                                    <div class="mt-4 space-y-3">
                                        @foreach($items as $it)
                                            <div class="flex items-start justify-between gap-4">
                                                <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">{{ $it['label'] }}</p>
                                                <p class="text-sm text-gray-900 dark:text-gray-100 text-right">{{ $it['value'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-gray-100 dark:border-gray-700 bg-gray-50/60 dark:bg-gray-900/30 p-5">
                                    <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Arah Kebijakan</p>
                                    <div class="mt-4 space-y-4">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">Visi</p>
                                            <p class="text-sm text-gray-900 dark:text-gray-100 mt-1 leading-relaxed">
                                                {{ $profildesa->visi }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">Misi</p>
                                            <p class="text-sm text-gray-900 dark:text-gray-100 mt-1 leading-relaxed whitespace-pre-line">
                                                {{ $profildesa->misi }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-2 rounded-2xl border border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                                    <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Deskripsi</p>
                                    <p class="text-sm text-gray-900 dark:text-gray-100 mt-3 leading-relaxed whitespace-pre-line">
                                        {{ $profildesa->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        @else
                            {{-- Empty state --}}
                            <div class="rounded-2xl border border-dashed border-gray-300 dark:border-gray-700 p-10 text-center">
                                <div class="mx-auto w-12 h-12 rounded-2xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 4v16m8-8H4"/>
                                    </svg>
                                </div>
                                <h4 class="mt-4 text-lg font-bold text-gray-900 dark:text-gray-100">Belum ada profil desa</h4>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    Tambahkan data profil desa agar halaman publik dapat menampilkan informasi resmi.
                                </p>
                                <a href="{{ route('admin.profil-desa.create') }}"
                                   class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-sm">
                                    Tambah Profil Desa
                                </a>
                            </div>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
