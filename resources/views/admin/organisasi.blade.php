<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center px-4">
            <h2 class="font-bold text-2xl text-white tracking-tight">
                {{ __('Manajemen Pejabat') }}
            </h2>
            {{-- Tombol Tambah Matte Style (Tanpa Glow) --}}
            <a href="{{ route('admin.organisasi.create') }}" 
               class="inline-flex items-center px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-bold rounded-xl transition-all duration-200 border border-emerald-500/20 shadow-none">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                Tambah Pejabat
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Alert Notifikasi Sukses --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/20 rounded-xl">
                    <p class="text-emerald-400 text-sm font-medium">{{ session('success') }}</p>
                </div>
            @endif

            {{-- Container Utama Matte Style --}}
            <div class="bg-[#1f2937] rounded-[1.5rem] border border-gray-700 overflow-hidden shadow-none">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-800/50 border-b border-gray-700">
                                <th class="px-8 py-6 text-xs font-black text-gray-400 uppercase tracking-[0.2em]">Profil Pejabat</th>
                                <th class="px-8 py-6 text-xs font-black text-gray-400 uppercase tracking-[0.2em]">Jabatan</th>
                                <th class="px-8 py-6 text-xs font-black text-gray-400 uppercase tracking-[0.2em] text-right">Opsi Manajemen</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/50">
                            @forelse ($data as $person)
                            <tr class="hover:bg-gray-800/40 transition-all duration-200 group">
                                {{-- Kolom Nama (Putih) & Foto --}}
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-6">
                                        <div class="h-16 w-16 rounded-xl overflow-hidden border border-gray-600 bg-gray-900 flex-shrink-0">
                                            <img src="{{ asset('storage/' . $person->foto) }}" 
                                                 class="h-full w-full object-cover" 
                                                 onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($person->nama) }}&color=10b981&background=111827'">
                                        </div>
                                        <span class="font-bold text-white text-xl tracking-wide">{{ $person->nama }}</span>
                                    </div>
                                </td>

                                {{-- Kolom Jabatan --}}
                                <td class="px-8 py-6">
                                    <span class="inline-flex items-center px-4 py-1.5 rounded-lg text-[11px] font-black uppercase tracking-[0.15em] bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        {{ $person->jabatan }}
                                    </span>
                                </td>

                                {{-- Kolom Opsi Manajemen (Ikon Diperbesar) --}}
                                <td class="px-8 py-6">
                                    <div class="flex justify-end items-center gap-4">
                                        <a href="{{ route('admin.organisasi.show', $person->id) }}" 
                                           class="p-3 text-gray-400 hover:text-white transition-colors" title="Lihat Detail">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </a>

                                        <a href="{{ route('admin.organisasi.edit', $person->id) }}" 
                                           class="p-3 bg-gray-800 text-amber-500 hover:bg-amber-600 hover:text-white rounded-xl transition-all border border-gray-700 shadow-none" title="Edit Data">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                        </a>

                                        <form action="{{ route('admin.organisasi.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Hapus pejabat ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="p-3 bg-gray-800 text-rose-500 hover:bg-rose-600 hover:text-white rounded-xl transition-all border border-gray-700 shadow-none" title="Hapus Data">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-8 py-24 text-center text-gray-500 italic font-medium tracking-wide">
                                    Belum ada data pejabat yang terdaftar.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>