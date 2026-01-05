<!-- Tombol Aksesibilitas -->
<div class="accessibility-wrapper">
    <button @click="akses = !akses"
        class="bg-green-600 text-white p-3 sm:p-4 rounded-full shadow-lg hover:bg-green-700 active:scale-95 transition duration-200 focus:outline-none focus:ring-2 focus:ring-green-400"
        aria-label="Tombol Aksesibilitas">
        ♿
    </button>
</div>

<!-- Popup Aksesibilitas -->
<div x-show="akses" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    class="accessibility-popup bg-white shadow-2xl border border-gray-200 rounded-xl p-3 sm:p-4 space-y-2 sm:space-y-3 w-44 sm:w-48 text-gray-800">
    <!-- Balik Warna -->
    <button @click="invert = !invert"
        class="w-full text-left px-3 py-2 text-sm sm:text-base rounded-md border border-gray-300 hover:bg-gray-100 focus:ring-2 focus:ring-green-400 transition">
        Balik Warna
    </button>

    <!-- Teks Besar -->
    <button @click="bigtext = !bigtext"
        class="w-full text-left px-3 py-2 text-sm sm:text-base rounded-md border border-gray-300 hover:bg-gray-100 focus:ring-2 focus:ring-green-400 transition">
        Teks Besar
    </button>

    <!-- Kontras Tinggi -->
    <button @click="hicontrast = !hicontrast"
        class="w-full text-left px-3 py-2 text-sm sm:text-base rounded-md border border-gray-300 hover:bg-gray-100 focus:ring-2 focus:ring-green-400 transition">
        Kontras Tinggi
    </button>
</div>