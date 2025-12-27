<!-- Tombol Aksesibilitas -->
<button 
    @click="akses = !akses"
    class="fixed bottom-28 right-4 bg-green-600 text-white p-4 rounded-full shadow-lg active:scale-95 transition z-50"
>
    ♿
</button>

<!-- Popup Aksesibilitas -->
<div 
    x-show="akses"
    x-transition
    class="fixed bottom-36 right-4 bg-white shadow-lg border rounded-xl p-4 space-y-3 w-48 z-50">

    <!-- Balik Warna -->
    <button 
        @click="invert = !invert"
        class="w-full text-left px-3 py-2 rounded-md border">
        Balik Warna
    </button>

    <!-- Teks Besar -->
    <button 
        @click="bigtext = !bigtext"
        class="w-full text-left px-3 py-2 rounded-md border">
        Teks Besar
    </button>

    <!-- Kontras Tinggi -->
    <button 
        @click="hicontrast = !hicontrast"
        class="w-full text-left px-3 py-2 rounded-md border">
        Kontras Tinggi
    </button>

</div>
